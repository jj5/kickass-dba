#!/bin/bash

main() {

  set -euo pipefail;

  local script="$( realpath "$( dirname "$0" )/../src/dba.php" )";

  [ ! -f "$script" ] && { echo "Error: script not found"; exit 1; }

  php $script "$@";

}

main "$@";
