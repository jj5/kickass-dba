#!/usr/bin/env php
<?php

function main( $argv ) {

  $script = $argv[ 0 ];

  if ( count( $argv ) === 1 ) {

    return run_interactive_shell();

  }

  echo "Non-interactive mode not yet implemented.\n";

}

function run_interactive_shell() {

  echo "Welcome to the DBA shell.\n";

  echo "Please enter the password.\n";

  while ( true ) {

    echo '> ';

  }

}

function read_secret( $prompt ) {

  echo $prompt;
  system( 'stty -echo' );
  $secret = trim( fgets( STDIN ) );
  system( 'stty echo' );
  echo "\n";

  return $secret;

}

function read_command( $prompt ) {

  echo $prompt;
  return trim( fgets( STDIN ) );

}

main( $argv );
