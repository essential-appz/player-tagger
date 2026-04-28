# Player Logger

**Version:** v0.2

A mobile-friendly web application for tracking player events during sports games. Record touches, goals, points, and other key events in real-time with an intuitive interface designed for quick data entry.

## 🎁 Free Version + Premium License

Player Logger offers a **free tier** with core game logging features, plus a **premium license** that unlocks advanced analytics, customization, and data management.

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

### Game Management
- **New Game Setup**: Configure team names with auto-generated game titles (e.g., "Team 1 v Team 2 - 06/04/2026")
- **Period Tracking**: Start and end 1st and 2nd halves with automatic game clock
- **Live Scoreboard**: Real-time score tracking with goals and points for both teams
- **Game Clock**: Automatic timer that runs during each half

### Event Logging
- **Player Selection**: Track up to 26 players per team (OUR and OPP)
  - Players arranged in GAA formation (goalkeeper, backs, midfield, forwards)
  - 15 starting players + 11 substitutes per team
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
- **Undo Last Event**: Quickly remove the most recently logged event
- **Automatic Timestamps**: Every event recorded with game time and period

### Data Visualization
- **Event Matrix** (FREE): Interactive tables showing event counts by player and descriptor
- **Sortable Columns** (FREE): Click column headers to sort players by any event type
- **Event Log** (FREE): Chronological list of all recorded events
- **Live Statistics** (FREE): Event count and score updates in real-time
- **Game Reports** (⭐ PREMIUM): Comprehensive analytics including:
  - Shot Conversion statistics
  - Kickout win/loss analysis
  - Top 3 possessions per team
  - Top 3 scorers (sorted by scoring value)

### Save & Load System (⭐ PREMIUM)
- **Save Game Progress**: Create checkpoint saves during the game (labeled "in-progress game")
- **End Game**: Mark game complete and save final data (labeled "full game")
- **Load Saves**: Restore any saved game state
- **Download Saves**: Export any saved game as CSV for sharing
- **Multiple Saves**: Keep multiple checkpoints per game
- **Individual Management**: Load, download, or delete any saved game

### Data Import & Export
- **CSV Download** (FREE): Export complete event log with timestamps, periods, and descriptors
- **CSV Import** (⭐ PREMIUM): Import game files from other Player Logger instances
  - Automatic descriptor detection and creation
  - Period state restoration
  - Format validation
- **Download Saved Games** (⭐ PREMIUM): Export individual checkpoints as CSV
- **Event Details**: Includes event number, timestamp, game time, period, type, category, and descriptors
- **Cross-Instance Sharing**: Share games between different browsers or users via CSV files

### Additional Features
- **Clear All**: Reset current game data
- **Responsive Design**: Optimized for mobile and tablet use
- **Offline Capable**: Works without internet connection
- **Local Storage**: All data saved in browser (events, descriptors, saved games)

## Workflow

### Starting a New Game

1. Click **Game Settings** button
2. Enter team names (Team 1 and Team 2)
3. Game name auto-generates as "Team 1 v Team 2 - dd/mm/yyyy"
4. Click **New Game** to start

### Recording Events

1. Click **Start 1st Half** to begin the game timer
2. Select a player from the formation (e.g., "OUR 1" or "OPP 15")
   - Touch is automatically added
3. Add additional event descriptors as needed (Shot, Goal, etc.)
4. Click **Manual Save Event** or select another player to auto-save
5. Use **Undo Last Event** to quickly correct mistakes
6. Repeat for all events during the game

### Managing Periods

- Click **End 1st Half** when the first half finishes
- Click **Start 2nd Half** to begin the second half (timer continues from 30:00)
- Click **End 2nd Half** when game is complete
  - This automatically opens Game Settings

### Saving Progress

- Click **Save Game Progress** anytime during the game to create a checkpoint
- Multiple checkpoints can be saved per game
- Each save shows timestamp, event count, and game type (in-progress or full game)
- Click **Download** on any saved game to export as CSV

### Ending a Game

1. Click **End 2nd Half** (opens Game Settings automatically)
2. Click **End Game**
   - Saves current game as "full game"
   - Clears all "in-progress game" checkpoints
   - Keeps game data visible for review
3. Download CSV to export final data
4. Click **Clear All** when ready to start a new game

### Loading Previous Games

1. Click **Game Settings**
2. View list of saved games in "Saved Progress" section
3. Click **Load** on any save to restore that game state
4. Click **Download** to export that saved game as CSV
5. Click **Delete** to remove individual saves

### Managing Custom Descriptors (⭐ PREMIUM)

1. Activate premium license or start free trial
2. Click **Game Settings**
3. Scroll to "Custom Event Descriptors" section
4. Type a new descriptor name and click **Add** (or press Enter)
5. Click **×** next to any descriptor to delete it
6. Click **Reset to Defaults** to restore original 9 descriptors
7. **Note**: Descriptors are locked during active games - you must end 2nd half before modifying

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
- Download CSV after each game for permanent backup
- The event matrix updates in real-time - use it to track player involvement
- Sort by "Touch" to see most active players
- Use **Undo Last Event** to quickly correct mistakes
- Start your **14-day free trial** to explore all premium features

### For Premium Users:
- Use **Save Game Progress** frequently during games to create backup checkpoints
- Create custom descriptors before starting a game (they lock once the game begins)
- Share games with others by downloading CSV and having them import it
- Download saved game checkpoints to create backups outside the browser
- Use **Reports** for quick in-game analytics and coaching decisions
- Import previous games to analyze patterns across multiple matches

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

### v0.2 (Latest)
- 🔑 Freemium model with premium licensing
- 🎁 14-day free trial for all premium features
- ⭐ Premium badge showing license status
- 💶 €59.99/year pricing for premium access

### v0.1

- ✅ Custom event descriptors (add, delete, reset)
- ✅ CSV import/export for game sharing
- ✅ Download button for saved games
- ✅ GAA formation layout for player selection
- ✅ Descriptor locking during active games
- ✅ Auto-detection of custom descriptors from imported CSVs

## Future Enhancements

Planned features may include:
- Online license key validation and management portal
- Team collaboration features (share licenses, sync data)
- Player substitution tracking
- Additional export formats (JSON, Excel, PDF reports)
- Cloud sync capabilities for premium users
- Multi-game tournament tracking and season analytics
- Advanced filtering and comparison tools

---

## Support & Purchase

- **Free Trial**: Start your 14-day trial directly in the app
- **Purchase License**: Contact us for license key purchase (€59.99/year)
- **Technical Support**: Report issues via GitHub Issues
- **Feature Requests**: Submit suggestions via GitHub Issues

**Note**: This is an actively developed application. Premium license holders receive priority support and feature updates.
