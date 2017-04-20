# use-silphpenv
Simple php use of Sil/PhpEnv wrapper class.

## Setup
1. Clone github.com repo lvail/use-silphpenv
1. Copy `local.env.dist` to `local.env`
  a. modify the github token
1. Install Docker (e.g. Docker for Windows)
1. Run `make install`
1. Run `make run`

### `make` commands in Makefile
1. `make install` - installs the Sil/PhpEnv dependencies
1. `make update` - updates project dependencies
1. `make bash` - allows you to execute command line operations in the Docker container
1. `make run` - runs src/main.php in the Docker container to test Sil/PhpEnv
