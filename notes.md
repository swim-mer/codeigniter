# CodeIgniter framework notes

## MVC Architecture
### Data Flow:
- `index.php`: front controller initializing resources to run CodeIgniter
- router processes HTTP request and checks for cache file
- - flow completed with cache file sent to browser
- if no cache file, HTTP request filtered for security
- application controller loads resources (libraries, models, etc.) to process HTTP request
- - flow completed with view rendered, (cached - if enabled), and sent to browser
