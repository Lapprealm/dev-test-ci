# Changes in PHPUnit 4.1

All notable changes of the PHPUnit 4.1 release series are documented in this file using the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## [4.1.6] - 2014-08-17

### Fixed

- Fixed [#1380](https://github.com/sebastianbergmann/phpunit/issues/1380): `assertMatch()` returns `Unexpected end tag : hr`
- Fixed [#1390](https://github.com/sebastianbergmann/phpunit/issues/1390): Licensing issue with third-party components bundled in PHAR distribution

## [4.1.5] - 2014-08-07

### Changed

- Implemented [#1330](https://github.com/sebastianbergmann/phpunit/issues/1330): Allow non-ambiguous shortened long options

### Fixed

- Fixed [#529](https://github.com/sebastianbergmann/phpunit/issues/529): Tests missed in execution when another test extends from it
- Fixed [#1149](https://github.com/sebastianbergmann/phpunit/issues/1149): Test swallows output buffer when run in a separate process
- Fixed [#1336](https://github.com/sebastianbergmann/phpunit/issues/1336): Problem in process isolation with global variables that contain an object which contains a string which contains multiple backslashes
- Fixed [#1337](https://github.com/sebastianbergmann/phpunit/issues/1337): Data Provider with `\` at the end of the name breaks with process isolation
- Fixed [#1345](https://github.com/sebastianbergmann/phpunit/issues/1345): Process isolation blocks infinitely upon fatal error in child process
- Fixed [#1354](https://github.com/sebastianbergmann/phpunit/issues/1354): PHPUnit test suite fails on Windows
- Fixed [#1369](https://github.com/sebastianbergmann/phpunit/issues/1369): Performance of `TestSuite::addTestFile()` and missing documentation
- Fixed [#1374](https://github.com/sebastianbergmann/phpunit/issues/1374): `tearDown()` is called despite unmet requirements

## [4.1.4] - 2014-07-18

### Fixed

- Fixed [#1265](https://github.com/sebastianbergmann/phpunit/issues/1265): `PHPUnit_Runner_StandardTestSuiteLoader` could not be configured as loader
- Fixed [#1311](https://github.com/sebastianbergmann/phpunit/issues/1311): Incomplete XML Schema for PHPUnit XML configuration file
- Fixed [#1314](https://github.com/sebastianbergmann/phpunit/issues/1314): Bug in configuration parser

## [4.1.3] - 2014-06-11

New release of PHPUnit as PHP Archive (PHAR) with updated dependencies

## [4.1.2] - 2014-06-07

New release of PHPUnit as PHP Archive (PHAR) with updated dependencies

## [4.1.1] - 2014-05-24

### Added

- Added `--selfupdate` alias for `--self-update`

### Changed

- Improved the fix for [#1133](https://github.com/sebastianbergmann/phpunit/issues/1133)

### Fixed

- Fixed the constructor argument for `SebastianBergmann\Version`

## [4.1.0] - 2014-05-02

### Changed

- The code to compare PHP values for equality (in `assertEquals()`, for instance) has been factored out into a [separate component](https://github.com/sebastianbergmann/comparator)
- [The mock object generator is now created lazily](https://github.com/sebastianbergmann/phpunit/pull/1165)

[4.1.6]: https://github.com/sebastianbergmann/phpunit/compare/4.1.5...4.1.6
[4.1.5]: https://github.com/sebastianbergmann/phpunit/compare/4.1.4...4.1.5
[4.1.4]: https://github.com/sebastianbergmann/phpunit/compare/4.1.3...4.1.4
[4.1.3]: https://github.com/sebastianbergmann/phpunit/compare/4.1.2...4.1.3
[4.1.2]: https://github.com/sebastianbergmann/phpunit/compare/4.1.1...4.1.2
[4.1.1]: https://github.com/sebastianbergmann/phpunit/compare/4.1.0...4.1.1
[4.1.0]: https://github.com/sebastianbergmann/phpunit/compare/4.0...4.1.0
