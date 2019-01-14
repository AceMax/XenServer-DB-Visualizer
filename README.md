# XenServer-DB-Visualizer
A tool for browsing / querying an offline version of XenServer's state / metadata database.

If you like me has struggled with bringing a failed XenServer back to life, you might (as me) have damned XenServer for it's way of storing metadata. This is why this project was brought to life.

The main purpose of XenServer DB Visualizer is not to fetch data from a running XenServer installation but to be able to read, view and query data from an off-line copy of the metadata database (state.db).

**Please be aware that the code in it's current state is my "2 hour at the airport" build. There is currently no search, filters or error handling. The complete database is read into memory each time you choose an configuration instances. This can take a while and produce a large output for a big size XenServer installation.**

## Requirements
- A >= PHP v5.6 enabled web server OR a local >= PHP v5.6 installation.

## Installation
- Clone the complete repository
- Download a copy of "/var/xapi/state.db" from your XenServer / pool master to the "data" subfolder.
- If you're using a web server, just point your browser to the server / url and you're all set.
### Using the PHP built-in web server
- If you're using a local PHP installation, take a look at the php-server.sh / .cmd for a way to start a local PHP built-in web server.
 - Start the local PHP web server and point your browser to the configured address/port.
 
 ## Compatibility
 Tested XenServer versions:
 - 6.2
 - 7.1 CU1
 
 ## What's next
 - Save metadata to a sqlite / MySQL db to be able to do explicit queries.
 - DB download feature.
 - DB backup script.
 - Support for multiple servers / pools.
