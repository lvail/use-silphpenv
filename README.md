# use-silphpenv
Simple php use of Sil/PhpEnv wrapper class.

## Setup
1. Clone github.com repo lvail/use-silphpenv
1. Copy `local.env.dist` to `local.env`
  a. modify the github token
1. See `Makefile` for `make` options
1. Runs in a Docker container

### `make` commands
1. `make install` - installs the Sil/PhpEnv dependencies
1. `make update` - updates project dependencies
1. `make bash` - allows you to execute command line operations in the Docker container
1. `make run` - runs src/main.php in the Docker container to test Sil/PhpEnv
