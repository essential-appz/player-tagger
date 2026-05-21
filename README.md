# Player Tagger

**Version:** v1.0

A mobile-friendly web application for tracking player events during sports games. Supports multiple sports including Gaelic Games (GAA) and Soccer, with sport-specific formations and player layouts. Record touches, goals, points, and other key events in real-time with an intuitive interface designed for quick data entry.

## 🎁 Free Version + Premium License

Player Tagger offers a **free tier** with core game logging features, plus a **premium license** that unlocks advanced analytics, customization, and data management.

### **Free Forever:**
- ✅ Full game logging (unlimited players, unlimited events)
- ✅ Default event descriptors (9 types)
- ✅ Live scoreboard & game clock
- ✅ Event matrices & sortable statistics
- ✅ CSV export for current game
- ✅ Period tracking & game management
- ✅ Offline PWA capability

### **Premium Features (€59.99/year):**
- ⭐ **Game Reports** - Detailed analytics with top performers, shot conversion, and kickout statistics
- ⭐ **Custom Descriptors** - Create unlimited custom event types
- ⭐ **CSV Import** - Load games from other users or devices
- ⭐ **Save Game Progress** - Create multiple checkpoint saves per game
- ⭐ **Load Saved Games** - Restore any previous game state
- ⭐ **Download Saved Games** - Export individual checkpoints as CSV

### **14-Day Free Trial:**
Try all premium features free for 14 days! Click the Premium badge in the app to activate your trial.

## Features

### Multi-Sport Support
- **Sport Selection**: Choose between different sports when creating a new game
  - **Gaelic Games (GAA)**: 15 starting players + 11 substitutes (26 total)
    - Traditional GAA formation: Goalkeeper, Full Backs, Half Backs, Midfield, Half Forwards, Full Forwards
    - Substitutes numbered 16-26
  - **Soccer**: 11 starting players + 11 substitutes (22 total)
    - 4-4-2 formation: Goalkeeper, 4 Defenders, 4 Midfielders, 2 Forwards
    - Substitutes numbered 12-22
- **Sport Type Saved**: Game type persists in saved games and is displayed in saved games list
- **Dynamic Player Layouts**: Player grids and event matrices automatically adjust based on selected sport

### Game Management
- **New Game Setup**: Configure sport type and team names with auto-generated game titles (e.g., "Team 1 v Team 2 - 06/04/2026")
- **Period Tracking**: Start and end 1st and 2nd halves with automatic game clock
- **Live Scoreboard**: Real-time score tracking with goals and points for both teams
  - Half-time scores displayed automatically after 1st half ends
  - HT scores shown in smaller font below current scores (e.g., "HT: 1:5")
- **Game Clock**: Automatic timer that runs during each half

### Event Logging
- **Player Selection**: Track players per team based on selected sport (OUR and OPP)
  - Gaelic Games: 26 players (15 starters + 11 subs) in GAA formation
  - Soccer: 22 players (11 starters + 11 subs) in 4-4-2 formation
  - Player layouts automatically adjust to match selected sport
- **Default Event Descriptors** (FREE): Record multiple event types per touch:
  - Touch (automatically included)
  - Shot
  - Goal
  - 2 Pointer
  - Point
  - T/O Won (Turnover Won)
  - T/O Lost (Turnover Lost)
  - K/O Won (Kick Out Won)
  - Own KO Won
  - Own KO Lost
- **Custom Event Descriptors** (⭐ PREMIUM): Create, edit, and manage your own event types
  - Add unlimited custom descriptors (e.g., "Assist", "Block", "Foul")
  - Delete unused descriptors
  - Reset to default set at any time
  - Descriptors locked during active games (protects data integrity)
  - Custom descriptors saved in browser and persist across sessions
- **Manual Save Event**: Manually save player actions from Match Events panel
- **Recent Events Panel**: View last 10 events with individual delete buttons
  - Quick visual reference of recent game activity
  - Delete any recent event (not just the last one)
  - Shows game time, player, and descriptors for each event
- **Automatic Timestamps**: Every event recorded with game time and period

### Data Visualization
- **Event Matrix** (FREE): Interactive tables showing event counts by player and descriptor
- **Sortable Columns** (FREE): Click column headers to sort players by any event type
- **Recent Events** (FREE): Shows last 10 events with delete buttons for quick corrections
- **Timeline** (FREE): Chronological scoring timeline in modal view
  - Player and event type for each score
  - Running score display for both teams
  - Half-time and full-time summary rows
  - Color-coded by score type (Goals=green, 2 Pointers=amber)
- **Live Statistics** (FREE): Event count and score updates in real-time
- **Game Reports** (⭐ PREMIUM): Comprehensive analytics including:
  - Possession, Shot Conversion, and Kickout statistics with 1st Half, 2nd Half, and Total breakdowns
  - Top 3 possessions per team
  - Top 3 scorers (sorted by scoring value)

### Game Reports & Analytics (⭐ PREMIUM)
- **Reports Button**: Access comprehensive game analytics from the main controls
- **Possession Statistics**: Time-based possession calculation with half-by-half breakdown
  - 1st Half, 2nd Half, and Total possession time for each team (MM:SS format)
  - Possession percentage based on ball control between touches
  - Calculated from consecutive touch events using game clock
  - Compare half-to-half performance to identify conditioning or tactical trends
- **Shot Conversion**: Shooting efficiency metrics with period-by-period analysis
  - Shots, Scores, and Conversion % for 1st Half, 2nd Half, and Total
  - Identify finishing trends between halves
- **Kickout Analysis**: Kickout win/loss statistics broken down by half
  - Own kickout and opposition kickout success rates for each half
  - Total game kickout performance
  - Track kickout strategy effectiveness throughout the match
- **Top 3 Possessions**: Most active players ranked by touches
- **Top 3 Scorers**: Highest scoring players with detailed breakdown
  - Goals, 2-Pointers, and Points columns
  - Total Points value calculated (Goals×3 + 2-Pointers×2 + Points)
  - Sorted by total points contribution
- **In-Game Reports**: View analytics during the game without interrupting play
- **Sequential Period Controls**: Reports adapt to current game period

### Save & Load System (⭐ PREMIUM)
- **Save Game Progress**: Create checkpoint saves during the game (labeled "in-progress game")
- **End Game**: Mark game complete and save final data (labeled "full game")
- **Load Saves**: Restore any saved game state
- **Download Saves**: Export any saved game as CSV for sharing
- **Multiple Saves**: Keep multiple checkpoints per game
- **Individual Management**: Load, download, or delete any saved game

### Data Import & Export
- **CSV Download** (FREE): Export complete event log with timestamps, periods, and descriptors
- **CSV Import** (⭐ PREMIUM): Import game files from other Player Tagger instances
  - Automatic descriptor detection and creation
  - Period state restoration
  - Format validation
- **Download Saved Games** (⭐ PREMIUM): Export individual checkpoints as CSV
- **Event Details**: Includes event number, timestamp, game time, period, type, category, and descriptors
- **Cross-Instance Sharing**: Share games between different browsers or users via CSV files

### Additional Features
- **End Game**: Complete game workflow with save and reset options
- **Responsive Design**: Optimized for mobile and tablet use
- **Offline Capable**: Works without internet connection
- **Local Storage**: All data saved in browser (events, descriptors, saved games)

## Workflow

### Starting a New Game

1. Click **Settings** button (top-left)
2. In the **Start New Game** section:
   - Select **Game Type** from dropdown (Gaelic Games or Soccer)
   - Enter team names (Team 1 and Team 2)
   - Game name auto-generates as "Team 1 v Team 2 - dd/mm/yyyy"
3. Click **New Game** button
   - Player layout updates to match selected sport
   - Formation displays appropriate positions
   - Settings modal closes automatically
4. Click **X** in modal header anytime to close without starting a game

### Recording Events

1. Click **Start 1st Half** to begin the game timer
2. Select a player from the formation (e.g., "OUR 1" or "OPP 15")
   - Touch is automatically added
3. Add additional event descriptors as needed (Shot, Goal, etc.)
4. Click **Manual Save Event** or select another player to auto-save
5. Check **Recent Events** panel to review and delete any mistakes
6. Repeat for all events during the game

### Managing Periods

- Click **End 1st Half** when the first half finishes
  - Half-time scores are automatically captured and displayed
- Click **Start 2nd Half** to begin the second half (timer continues from 30:00)
- Click **End 2nd Half** when game is complete
- Use **End Game** button when ready to finalize and save the game

### Viewing Match Timeline

1. Click **Timeline** button in the main controls
2. View chronological scoring timeline showing:
   - Each scoring event with game time
   - Player number and event type (Goal, Point, 2 Pointer)
   - Running score for both teams after each event
   - Half-Time and Full-Time summary rows
3. Timeline opens in a modal overlay
4. Click **X** to close

### Viewing Game Reports

1. Click **Reports** button in the main controls
2. View comprehensive analytics including:
   - **Possession**: Time and percentage for each team broken down by 1st Half, 2nd Half, and Total
   - **Shot Conversion**: Shots, scores, and conversion % for each half and total game
   - **Kickouts**: Success rates for own kickouts and opposition wins across both halves
   - **Top 3 Possessions**: Most active players by touch count
   - **Top 3 Scorers**: Leading scorers with goals, 2-pointers, points, and total points value
3. Reports can be viewed anytime during or after the game
4. Half-by-half breakdown helps identify performance trends and tactical adjustments
5. Click **X** to close

### Saving Progress

- Click **Save Game Progress** anytime during the game to create a checkpoint
- Multiple checkpoints can be saved per game
- Each save shows timestamp, event count, sport type (Soccer/Gaelic), and save type (in-progress or full game)
- Sport configuration is preserved when loading saved games
- Click **Download** on any saved game to export as CSV

### Ending a Game

1. Click **End Game** button in the main controls
2. Confirms: "End game and save final data?"
   - Saves current game as "full game"
   - Clears all "in-progress game" checkpoints
3. Prompts: "Game saved! Start a new game?"
   - **Yes**: Clears current data and opens Settings modal to configure new game
   - **No**: Keeps game data visible for review and CSV export
4. Download CSV to export final data if needed

### Loading Previous Games

1. Click **Settings** button
2. Scroll to **Saved Games** section
3. Browse list of saved games with sport type and save type labels
4. Click **Load** on any save to restore that game state
5. Click **Download** to export that saved game as CSV
6. Click **Delete** to remove individual saves
7. Click **X** to close settings when done

### Managing Custom Descriptors (⭐ PREMIUM)

1. Activate premium license or start free trial
2. Click **Settings** button
3. Scroll to **Custom Event Descriptors** section
4. Type a new descriptor name and click **Add** (or press Enter)
5. Click **×** next to any descriptor to delete it
6. Click **Reset to Defaults** to restore original 9 descriptors
7. Click **X** to close settings when done
8. **Note**: Descriptors are locked during active games - you must end 2nd half before modifying

### Importing Games from Other Instances (⭐ PREMIUM)

1. Activate premium license or start free trial
2. Receive a CSV file from another user
3. Click **Import CSV** button
4. Select the CSV file
5. Game data loads automatically with all events and custom descriptors
6. Period state and scoreboard restore to match the imported game

### Activating Your License

1. Click the **Premium badge** in the app header
2. Choose one of:
   - **Start Free Trial** (14 days, no payment)
   - **Enter License Key** (if you've purchased)
3. If entering a key:
   - Type or paste your license key
   - Format: PTAG-XXXX-XXXX-XXXX
   - Click "Activate License"
4. Confirmation message appears
5. Premium features unlock immediately

## Data Storage

All data is stored locally in your browser using localStorage:
- Current game events
- Team names and game settings
- Saved game checkpoints
- Custom event descriptors
- No data is sent to external servers
- CSV files can be shared between instances for collaboration

## Browser Compatibility

Works best on modern browsers:
- Chrome/Edge (desktop & mobile)
- Safari (desktop & mobile)
- Firefox (desktop & mobile)

## Notes

- This is a **beta version** - features and workflows may change
- Data is stored locally - clearing browser data will delete saved games
- For best results, use on a tablet or mobile device during games
- Built-in load testing available via browser console: `testLoad(500)`

## Tips

### For Free Users:
- Select the correct **Game Type** before starting a new game (cannot be changed mid-game)
- Use **End Game** button to save and optionally start a new game with one workflow
- Download CSV after each game for permanent backup
- The event matrix updates in real-time - use it to track player involvement
- Sort by "Touch" to see most active players
- Use **Recent Events** panel to review and delete any mistakes
- Click **Timeline** to see scoring progression throughout the game
- Start your **14-day free trial** to explore all premium features

### For Premium Users:
- Select the correct **Game Type** before starting a new game (cannot be changed mid-game)
- Use **End Game** button to save and optionally start a new game with one workflow
- Use **Save Game Progress** frequently during games to create backup checkpoints
- Click **Reports** at halftime or end of game to view detailed analytics
- Check possession stats during breaks to adjust strategy
- Use half-by-half breakdown to identify performance drops or improvements between halves
- Compare 1st half vs 2nd half shot conversion to assess finishing under fatigue
- Create custom descriptors before starting a game (they lock once the game begins)
- Share games with others by downloading CSV and having them import it
- Download saved game checkpoints to create backups outside the browser
- Use **Reports** for quick in-game analytics and coaching decisions
- Import previous games to analyze patterns across multiple matches
- Half-time scores are automatically saved when you end the 1st half

## 🔑 Licensing & Pricing

### **How to Get Premium:**

1. **Start Free Trial** (14 days)
   - Click the Premium badge in the app header
   - Click "Start Free Trial" button
   - All premium features unlock immediately
   - No payment required

2. **Purchase License Key**
   - Price: **€59.99 per year**
   - One license unlocks all premium features
   - Works offline after activation
   - Valid for 1 year from purchase date

3. **Activate License**
   - Click the Premium badge
   - Enter your license key (format: PTAG-XXXX-XXXX-XXXX)
   - Click "Activate License"
   - Premium features unlock immediately

### **License Key Details:**
- Works completely offline (no internet required after activation)
- One key per user
- Annual subscription model
- All data stored locally on your device
- No recurring payments needed during active license period

### **What Happens When Trial/License Expires:**
- Free features remain fully functional
- Premium features become locked
- Your saved games are preserved (but cannot load/save new ones without premium)
- Custom descriptors revert to default 9 descriptors
- You can purchase a license key anytime to regain access

## Recent Updates

### v1.0 (Latest)
- 📊 **Half-by-Half Analytics**: Game Reports now show 1st Half, 2nd Half, and Total metrics
  - Possession statistics broken down by period
  - Shot Conversion analysis per half
  - Kickout success rates for each half
  - Helps identify performance trends and tactical adjustments between halves
- 🔑 Freemium model with premium licensing
- 🎁 14-day free trial for all premium features
- ⭐ Premium badge showing license status
- 💶 €59.99/year pricing for premium access
- ✅ **Multi-Sport Support**: Configure game type with sport-specific formations
  - Gaelic Games (GAA): Traditional 15-player formation + 11 subs
  - Soccer: 4-4-2 formation with 11 starters + 11 subs
  - Sport type selector dropdown for easy future expansion
  - Game type saved and displayed in saved games list
  - Matrices dynamically adjust to correct player counts
- 📊 **Match Timeline**: Chronological scoring timeline with running scores
  - Half-Time and Full-Time summary rows
  - Color-coded by score type (Goals=green, 2 Pointers=amber)
  - Modal overlay with X close button
- 🔄 **Recent Events Panel**: Shows last 10 events with individual delete buttons
  - Replace old "Undo Last Event" button
  - Delete any recent event, not just the most recent
- ⚡ **Performance Improvement**: Removed event log DOM rendering for faster operation
- 🎨 **UI Consistency**: Standardized modal close buttons (X) for Timeline and Reports
- 🎨 **Settings Modal Redesign**: Improved organization and workflow
  - Separated into clear sections: Start New Game, Saved Games, Custom Descriptors
  - Added X close button to modal header
  - Removed Close button from footer for cleaner UI
  - Added section headers with visual separators
- 🔄 **End Game Workflow**: Streamlined game completion process
  - Replaced "Clear All" with "End Game" button in main controls
  - End Game now offers to start a new game immediately
  - Single-button workflow from game end to new game start

### v0.1

- ✅ **Game Reports & Analytics**: Comprehensive statistics dashboard
  - Possession tracking with time and percentage
  - Shot conversion analysis
  - Kickout success rates
  - Top 3 players by possessions
  - Top 3 scorers with total points calculation
- ✅ **Half-time Score Display**: Automatic HT score tracking after 1st half
- ✅ Custom event descriptors (add, delete, reset)
- ✅ CSV import/export for game sharing
- ✅ Download button for saved games
- ✅ GAA formation layout for player selection
- ✅ Descriptor locking during active games
- ✅ Auto-detection of custom descriptors from imported CSVs

## Future Enhancements

Planned features may include:
- Additional sports support (Rugby, Hockey, Basketball, etc.)
- Online license key validation and management portal
- Team collaboration features (share licenses, sync data)
- Player substitution tracking
- Additional export formats (JSON, Excel, PDF reports)
- Cloud sync capabilities for premium users
- Multi-game tournament tracking and season analytics
- Extended analytics (heat maps, player efficiency ratings)
- Advanced filtering and comparison tools

---

## Support & Purchase

- **Free Trial**: Start your 14-day trial directly in the app
- **Purchase License**: Contact us for license key purchase (€59.99/year)
- **Technical Support**: Report issues via GitHub Issues
- **Feature Requests**: Submit suggestions via GitHub Issues

**Note**: This is an actively developed application. Premium license holders receive priority support and feature updates.
