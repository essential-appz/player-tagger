# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Player Logger is a mobile-first web application for tracking player events during GAA (Gaelic Athletic Association) sports games. The entire application is contained in a single `index.html` file with embedded CSS and JavaScript.

**Key Characteristics:**
- Single-file application (no build process, no dependencies)
- Pure vanilla JavaScript, HTML, and CSS
- LocalStorage-based persistence
- Offline-capable PWA design
- Optimized for mobile/tablet use during live games

## Development

### Testing
- **Browser Testing**: Open `index.html` directly in a browser (Chrome, Safari, Firefox)
- **Load Testing**: Open browser console and run `testLoad(500)` to simulate 500 events and test performance
- No build, compile, or bundle steps required

### Data Storage
All data persists in browser `localStorage`:
- `categoryEvents`: Current game events array
- `gameSaves`: Array of saved game states (checkpoints and completed games)

## Architecture

### State Management
Global state variables in `<script>` section:
- `events`: Array of all logged events for current game
- `currentType`: Selected team type ('OUR' or 'OPP')
- `currentCategory`: Selected player (e.g., 'OUR 1', 'OPP 15')
- `currentPeriod`: Game period state
- `selectedDescriptors`: Array of event descriptors for current event
- `ckSort`/`oppSort`: Matrix sorting state

### Event Data Structure
Each event contains:
```javascript
{
  timestamp: ISO string,
  time: "MM:SS" (game clock),
  period: "1st Half Started" | "1st Half Ended" | "2nd Half Started" | "2nd Half Ended",
  type: "OUR" | "OPP",
  category: "OUR 1" through "OUR 26" | "OPP 1" through "OPP 26",
  descriptors: "Touch, Goal, Point" (comma-separated string)
}
```

### UI Components

**Player Panels (GAA Formation)**
- 15 starting players arranged in traditional GAA formation:
  - 1 Goalkeeper
  - 3 Full backs (positions 2-4)
  - 3 Half backs (positions 5-7)
  - 2 Midfield (positions 8-9)
  - 3 Half forwards (positions 10-12)
  - 3 Full forwards (positions 13-15)
- 11 substitutes (positions 16-26) in two rows below
- Mirrored layout for both OUR and OPP teams

**Event Matrix System**
- Two separate matrices (OUR and OPP) track event counts
- Rows: Player categories (OUR 1-26, OPP 1-26)
- Columns: Event descriptors (Touch, Shot, Goal, 2 Pointer, Point, T/O Won, T/O Lost, K/O Won)
- Sortable by any descriptor column (ascending/descending)
- Sticky headers and category columns for scrolling
- `updateMatrix()` rebuilds counts from events array and applies current sorting

**Scoreboard Calculation**
- Goals: Count of events with 'Goal' descriptor
- Points: Sum of 'Point' (1 point) and '2 Pointer' (2 points) descriptors
- `updateScoreboard()` iterates through events to calculate totals

### Key Functions

**Event Lifecycle:**
1. `selectCat()` - Sets current player, enables descriptor buttons, auto-adds "Touch"
2. `toggleDesc()` - Adds/removes event descriptors
3. `saveEvent()` - Creates event object with game time, pushes to events array
4. `addLogEntry()` - Appends event to visual log
5. `updateMatrix()` - Recalculates and displays matrix counts
6. `updateScoreboard()` - Recalculates team scores

**Auto-save Behavior:**
- Selecting a new player while descriptors are active automatically saves the current event
- Ending a half automatically saves any pending event
- "Save Event" button manually triggers save

**Game Timer:**
- Starts at 00:00 for 1st Half, 30:00 for 2nd Half
- Managed by `timerInterval` (1-second ticks)
- `startTimer(startSeconds)`, `stopTimer()`, `updateClockDisplay()`
- Game time embedded in each event for CSV export

**Save/Load System:**
- `saveProgress(isFinalGame)` - Creates checkpoint or final save
- `loadSave(index)` - Restores game state from saved data
- `endGame()` - Saves as final game, removes all in-progress checkpoints
- Each save stores: gameName, team names, events array, timestamp, event count, isFinalGame flag

## Common Modifications

### Adding Event Descriptors
1. Add to `descriptors` array (line 629)
2. UI buttons auto-generate from array
3. Matrix columns auto-build from `allDescriptors`

### Changing Player Count
1. Update `categories` and `opponents` arrays (lines 627-628)
2. Modify `formation` array structure (line 836) if changing field positions
3. Update `subs` array (line 844) for bench players

### Modifying Formation Layout
Edit the `formation` array (line 836):
- Each sub-array is a row of players
- Player numbers correspond to positions
- CSS classes `.formation-row` and `.subs-row` control spacing

### CSV Export Format
Modify `downloadCSV()` function (line 1473):
- Current headers: Event#, Timestamp, Game Time, Period, Type, Category, Descriptors
- Events exported in chronological order

## Important Patterns

**No Separation of Concerns**: This is intentionally a single-file app for offline portability. Don't split into separate JS/CSS files unless explicitly requested.

**Matrix Performance**: With 26 players × 8 descriptors × 2 teams = 416 cells, DOM updates can be slow. The current implementation:
- Resets all cells to "0"
- Counts events into a hash map
- Updates only cells with non-zero counts
- Applies sorting to rows

**Touch Auto-inclusion**: "Touch" is automatically added to every event and cannot be removed. Other descriptors are optional.

**Period Validation**: Players cannot be selected until a half is started (enforced in `selectCat()`).

## Browser Console Utilities

- `testLoad(n)` - Generate n random events for testing performance
- All global functions are accessible for debugging

## GAA Context

This app is designed for Gaelic football/hurling. Scoring system:
- **Goal** = 3 points (ball in net)
- **Point** = 1 point (ball over bar)
- **2 Pointer** = 2 points (variant scoring)
- Score format: "Goals:Points" (e.g., "2:15" = 2 goals + 15 points = 21 total points)
