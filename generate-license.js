#!/usr/bin/env node

/**
 * Player Tagger License Key Generator
 *
 * Generates valid license keys in format: PTAG-XXXX-XXXX-XXXX
 * Validation rule: Middle 8 characters (parts 2 & 3) ASCII sum divisible by 7
 */

function generateLicenseKey() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    // Generate part 1 (can be random)
    let part1 = '';
    for (let i = 0; i < 4; i++) {
        part1 += chars[Math.floor(Math.random() * chars.length)];
    }

    // Generate parts 2 and 3 with checksum validation
    let part2 = '';
    let part3 = '';
    let isValid = false;

    while (!isValid) {
        part2 = '';
        part3 = '';

        // Generate part 2
        for (let i = 0; i < 4; i++) {
            part2 += chars[Math.floor(Math.random() * chars.length)];
        }

        // Generate part 3
        for (let i = 0; i < 4; i++) {
            part3 += chars[Math.floor(Math.random() * chars.length)];
        }

        // Check if valid (ASCII sum divisible by 7)
        const checksum = part2 + part3;
        let sum = 0;
        for (let char of checksum) {
            sum += char.charCodeAt(0);
        }

        if (sum % 7 === 0) {
            isValid = true;
        }
    }

    return `PTAG-${part1}-${part2}-${part3}`;
}

// Generate licenses based on command line argument
const count = parseInt(process.argv[2]) || 1;

console.log(`\n🔑 Player Tagger License Generator`);
console.log(`=====================================\n`);
console.log(`Generating ${count} license key(s)...\n`);

for (let i = 0; i < count; i++) {
    const license = generateLicenseKey();
    console.log(`${i + 1}. ${license}`);
}

console.log(`\n✓ Done! Generated ${count} valid license key(s).`);
console.log(`\nFormat: PTAG-XXXX-XXXX-XXXX`);
console.log(`Price: €79.99/year per license\n`);
