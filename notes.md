# CodeIgniter framework notes

## MVC Architecture
### Data Flow:
- `index.php`: front controller initializing resources to run CodeIgniter
- router processes HTTP request and checks for cache file
- - flow completed with cache file sent to browser
- if no cache file, HTTP request filtered for security
- application controller loads resources (libraries, models, etc.) to process HTTP request
- - flow completed with view rendered, (cached - if enabled), and sent to browser

### Model-View-Controller
#### Model (not required in CodeIgniter)
- Representations of data structures
- Contain functions to retrieve, insert, and update information in database

#### View
- Presentation of information
- Can be web page, page fragment (header, footer), RSS page, or other

#### Controller
- Intermediary between Model and View
- loads resources to process HTTP request and generate web page

## Design

Goals of CodeIgniter: Lightweight, flexible, and performant.

### Dynamic Instantiation
- Components are loaded and routines are executed on an as-needed basis
### Loose Coupling and Component Singularity
- Components decoupled as much as possible, with each component containing a specific, singular purpose; high degree of modularity


## News app tutorial from documentation
### Static pages
- Handled by controller
- Deconstructed URL: `http://domain.com/controller-name/method-name/arguments`

#### Controller
- Referred to as super object in discussion, and `$this` in code
- Contains `$data` array, which transports variables from controller to view

#### View
- Page template (`application/views/pages/`)
- `$data` keys are variables in view; `$data['name']` in controller = `$name` in view

#### Routing
- Route rules added to `$route` array
- Read from top to bottom; routes to first matching rule
- Rule format: `controller-name/method-name/(optional - $argument)`
