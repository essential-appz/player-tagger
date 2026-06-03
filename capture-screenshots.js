const puppeteer = require('puppeteer');

const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

async function captureScreenshots() {
    const browser = await puppeteer.launch({
        headless: false,
        defaultViewport: { width: 1400, height: 900 }
    });

    const page = await browser.newPage();

    try {
        // Navigate to the app
        await page.goto('http://localhost:8000/index.html', { waitUntil: 'networkidle0' });

        console.log('Capturing main app view...');
        await page.screenshot({ path: 'screenshots/01-main-app.png', fullPage: true });

        // Set up a game
        console.log('Setting up game...');
        await page.evaluate(() => {
            // Set team names
            localStorage.setItem('ourTeamName', 'Kerry');
            localStorage.setItem('oppTeamName', 'Dublin');
        });

        // Reload and wait for it to complete
        await page.reload({ waitUntil: 'networkidle0' });
        await sleep(1000);

        // Start the game
        console.log('Starting game and adding events...');
        await page.evaluate(() => {
            // Start first half
            const startBtn = Array.from(document.querySelectorAll('.period-btn')).find(btn => btn.textContent.includes('Start 1st Half'));
            if (startBtn) startBtn.click();
        });

        await sleep(500);

        // Add some events to create a game in progress
        await page.evaluate(() => {
            // Add events programmatically
            currentType = 'OUR';
            currentCategory = 'OUR 14';
            selectedDescriptors = ['Touch', 'Shot', 'Point'];
            saveEvent();

            currentCategory = 'OUR 15';
            selectedDescriptors = ['Touch', 'Shot', 'Goal'];
            saveEvent();

            currentType = 'OPP';
            currentCategory = 'OPP 13';
            selectedDescriptors = ['Touch', 'Shot', 'Point'];
            saveEvent();

            currentType = 'OUR';
            currentCategory = 'OUR 8';
            selectedDescriptors = ['Touch', 'T/O Won'];
            saveEvent();

            currentCategory = 'OUR 12';
            selectedDescriptors = ['Touch', 'Shot', '2 Pointer'];
            saveEvent();

            currentType = 'OPP';
            currentCategory = 'OPP 9';
            selectedDescriptors = ['Touch', 'Shot', 'Point'];
            saveEvent();

            currentType = 'OUR';
            currentCategory = 'OUR 1';
            selectedDescriptors = ['Touch', 'K/O Won'];
            saveEvent();
        });

        await sleep(1000);

        console.log('Capturing game in progress...');
        await page.screenshot({ path: 'screenshots/02-game-in-progress.png', fullPage: true });

        // Open Timeline view
        console.log('Opening timeline view...');
        await page.evaluate(() => {
            openTimeline();
        });

        await sleep(1000);
        await page.screenshot({ path: 'screenshots/03-timeline-view.png', fullPage: true });

        // Close timeline
        await page.evaluate(() => {
            closeTimelineModal();
        });

        await sleep(500);

        // Try to open Reports (will show premium lock if not activated)
        console.log('Opening reports view...');
        await page.evaluate(() => {
            // Activate trial for demo
            startTrial();
        });

        await sleep(500);

        await page.evaluate(() => {
            openReportsModal();
        });

        await sleep(1500);
        await page.screenshot({ path: 'screenshots/04-reports-view.png', fullPage: true });

        console.log('All screenshots captured successfully!');

    } catch (error) {
        console.error('Error capturing screenshots:', error);
    } finally {
        await browser.close();
    }
}

captureScreenshots();
