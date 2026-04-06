# Player Logger

**Version:** Beta

A mobile-friendly web application for tracking player events during sports games. Record touches, goals, points, and other key events in real-time with an intuitive interface designed for quick data entry.

## Features

### Game Management
- **New Game Setup**: Configure team names with auto-generated game titles (e.g., "Team 1 v Team 2 - 06/04/2026")
- **Period Tracking**: Start and end 1st and 2nd halves with automatic game clock
- **Live Scoreboard**: Real-time score tracking with goals and points for both teams
- **Game Clock**: Automatic timer that runs during each half

### Event Logging
- **Player Selection**: Track up to 26 players per team (OUR and OPP)
- **Event Descriptors**: Record multiple event types per touch:
  - Touch (automatically included)
  - Shot
  - Goal
  - 2 Pointer
  - Point
  - T/O Won (Turnover Won)
  - T/O Lost (Turnover Lost)
  - K/O Won (Kick Out Won)
- **Automatic Timestamps**: Every event recorded with game time and period

### Data Visualization
- **Event Matrix**: Interactive tables showing event counts by player and descriptor
- **Sortable Columns**: Click column headers to sort players by any event type
- **Event Log**: Chronological list of all recorded events
- **Live Statistics**: Event count and score updates in real-time

### Save & Load System
- **Save Progress**: Create checkpoint saves during the game (labeled "in-progress game")
- **End Game**: Mark game complete and save final data (labeled "full game")
- **Load Saves**: Restore any saved game state
- **Multiple Saves**: Keep multiple checkpoints per game
- **Individual Management**: Load or delete any saved game

### Data Export
- **CSV Download**: Export complete event log with timestamps, periods, and descriptors
- **Event Details**: Includes event number, timestamp, game time, period, type, category, and descriptors

### Additional Features
- **Undo Last Event**: Remove the most recently logged event
- **Clear All**: Reset current game data
- **Responsive Design**: Optimized for mobile and tablet use
- **Offline Capable**: Works without internet connection
- **Local Storage**: All data saved in browser

## Workflow

### Starting a New Game

1. Click **Game Settings** button
2. Enter team names (Team 1 and Team 2)
3. Game name auto-generates as "Team 1 v Team 2 - dd/mm/yyyy"
4. Click **New Game** to start

### Recording Events

1. Click **Start 1st Half** to begin the game timer
2. Select a player category (e.g., "OUR 1" or "OPP 1")
   - Touch is automatically added
3. Add additional event descriptors as needed (Shot, Goal, etc.)
4. Click **Save Event** or select another player to auto-save
5. Repeat for all events during the game

### Managing Periods

- Click **End 1st Half** when the first half finishes
- Click **Start 2nd Half** to begin the second half (timer continues from 30:00)
- Click **End 2nd Half** when game is complete
  - This automatically opens Game Settings

### Saving Progress

- Click **Save Progress** anytime during the game to create a checkpoint
- Multiple checkpoints can be saved per game
- Each save shows timestamp and event count

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
4. Click **Delete** to remove individual saves

## Data Storage

All data is stored locally in your browser using localStorage:
- Current game events
- Team names and game settings
- Saved game checkpoints
- No data is sent to external servers

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

- Use **Save Progress** frequently during games to create backup checkpoints
- The event matrix updates in real-time - use it to track player involvement
- Sort by "Touch" to see most active players
- Download CSV after each game for permanent backup
- Use **Undo Last Event** to quickly correct mistakes

## Future Enhancements

This is a beta release. Planned features may include:
- Custom event descriptors
- Game statistics and analytics
- Player substitution tracking
- Export to multiple formats
- Cloud sync capabilities

---

**Feedback & Issues**: This is a beta version under active development. Report issues or suggest features via GitHub Issues.
