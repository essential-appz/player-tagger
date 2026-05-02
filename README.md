# Player Logger

**Version:** v0.1 (Beta)

A mobile-friendly web application for tracking player events during sports games. Record touches, goals, points, and other key events in real-time with an intuitive interface designed for quick data entry.

## Features

### Game Management
- **New Game Setup**: Configure team names with auto-generated game titles (e.g., "Team 1 v Team 2 - 06/04/2026")
- **Period Tracking**: Start and end 1st and 2nd halves with automatic game clock
- **Live Scoreboard**: Real-time score tracking with goals and points for both teams
  - Half-time scores displayed automatically after 1st half ends
  - HT scores shown in smaller font below current scores (e.g., "HT: 1:5")
- **Game Clock**: Automatic timer that runs during each half

### Event Logging
- **Player Selection**: Track up to 26 players per team (OUR and OPP)
  - Players arranged in GAA formation (goalkeeper, backs, midfield, forwards)
  - 15 starting players + 11 substitutes per team
- **Event Descriptors**: Record multiple event types per touch:
  - Touch (automatically included)
  - Shot
  - Goal
  - 2 Pointer
  - Point
  - T/O Won (Turnover Won)
  - T/O Lost (Turnover Lost)
  - K/O Won (Kick Out Won)
- **Custom Event Descriptors**: Create, edit, and manage your own event types
  - Add unlimited custom descriptors (e.g., "Assist", "Block", "Foul")
  - Delete unused descriptors
  - Reset to default set at any time
  - Descriptors locked during active games (protects data integrity)
  - Custom descriptors saved in browser and persist across sessions
- **Manual Save Event**: Manually save player actions from Match Events panel
- **Undo Last Event**: Quickly remove the most recently logged event
- **Automatic Timestamps**: Every event recorded with game time and period

### Data Visualization
- **Event Matrix**: Interactive tables showing event counts by player and descriptor
- **Sortable Columns**: Click column headers to sort players by any event type
- **Event Log**: Chronological list of all recorded events
- **Live Statistics**: Event count and score updates in real-time

### Game Reports & Analytics
- **Reports Button**: Access comprehensive game analytics from the Game Period section
- **Possession Statistics**: Time-based possession calculation
  - Total possession time for each team (MM:SS format)
  - Possession percentage based on ball control between touches
  - Calculated from consecutive touch events using game clock
- **Shot Conversion**: Shooting efficiency metrics
  - Total shots vs scores for each team
  - Conversion percentage
- **Kickout Analysis**: Kickout win/loss statistics
  - Own kickout success rates
  - Opposition kickout wins
- **Top 3 Possessions**: Most active players ranked by touches
- **Top 3 Scorers**: Highest scoring players with detailed breakdown
  - Goals, 2-Pointers, and Points columns
  - Total Points value calculated (Goals×3 + 2-Pointers×2 + Points)
  - Sorted by total points contribution
- **In-Game Reports**: View analytics during the game without interrupting play
- **Sequential Period Controls**: Reports adapt to current game period

### Save & Load System
- **Save Game Progress**: Create checkpoint saves during the game (labeled "in-progress game")
- **End Game**: Mark game complete and save final data (labeled "full game")
- **Load Saves**: Restore any saved game state
- **Download Saves**: Export any saved game as CSV for sharing
- **Multiple Saves**: Keep multiple checkpoints per game
- **Individual Management**: Load, download, or delete any saved game

### Data Import & Export
- **CSV Download**: Export complete event log with timestamps, periods, and descriptors
- **CSV Import**: Import game files from other Player Logger instances
  - Automatic descriptor detection and creation
  - Period state restoration
  - Format validation
- **Download Saved Games**: Export individual checkpoints as CSV
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
  - Half-time scores are automatically captured and displayed
- Click **Start 2nd Half** to begin the second half (timer continues from 30:00)
- Click **End 2nd Half** when game is complete
  - This automatically opens Game Settings

### Viewing Game Reports

1. Click **Reports** button in the Game Period section
2. View comprehensive analytics including:
   - **Possession**: Total time and percentage for each team
   - **Shot Conversion**: Shots vs scores with conversion percentage
   - **Kickouts**: Success rates for own kickouts and opposition wins
   - **Top 3 Possessions**: Most active players by touch count
   - **Top 3 Scorers**: Leading scorers with goals, 2-pointers, points, and total points value
3. Reports can be viewed anytime during or after the game
4. Click **Close** to return to game

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

### Managing Custom Descriptors

1. Click **Game Settings**
2. Scroll to "Custom Event Descriptors" section
3. Type a new descriptor name and click **Add** (or press Enter)
4. Click **×** next to any descriptor to delete it
5. Click **Reset to Defaults** to restore original descriptors
6. **Note**: Descriptors are locked during active games - you must end 2nd half before modifying

### Importing Games from Other Instances

1. Receive a CSV file from another user
2. Click **Import CSV** button
3. Select the CSV file
4. Game data loads automatically with all events and custom descriptors
5. Period state and scoreboard restore to match the imported game

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

- Use **Save Game Progress** frequently during games to create backup checkpoints
- Click **Reports** at halftime or end of game to view detailed analytics
- Check possession stats during breaks to adjust strategy
- The event matrix updates in real-time - use it to track player involvement
- Sort by "Touch" to see most active players
- Download CSV after each game for permanent backup
- Use **Undo Last Event** to quickly correct mistakes
- Create custom descriptors before starting a game (they lock once the game begins)
- Share games with others by downloading CSV and having them import it
- Download saved game checkpoints to create backups outside the browser
- Half-time scores are automatically saved when you end the 1st half

## Recent Updates (v0.1)

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
- Player substitution tracking
- Additional export formats (JSON, Excel)
- Cloud sync capabilities
- Multi-game tournament tracking
- Extended analytics (heat maps, player efficiency ratings)

---

**Feedback & Issues**: This is a beta version under active development. Report issues or suggest features via GitHub Issues.
