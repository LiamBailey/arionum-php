# Changelog

All notable changes to `arionum-php` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](https://keepachangelog.com) principles.

## [v2.1.0] - 2018-10-13

### Added
- Add an optional `limit` parameter to the `getTransactions` method ([64c9a69](https://github.com/pxgamer/arionum-php/commit/64c9a694ac5c2b8a1b18f1ace438b0eda28e2990))
- Add the `getSanityDetails` method ([f5a87ac](https://github.com/pxgamer/arionum-php/commit/f5a87acb3efcb57291e619d04bcab3638339fdaf))
- Add the `getNodeInfo` method ([71fa043](https://github.com/pxgamer/arionum-php/commit/71fa043d264fced09236a1352ca0772797a148a6))

## [v2.0.0] - 2018-10-11

### Added
- Add support for custom `Guzzle\ClientInterface` instance in constructor ([ead482fa](https://github.com/pxgamer/arionum-php/commit/ead482faafc4bec6da8aed244911dd7933c456d9))

### Removed
- Remove the `setNodeAddress` method from the `Arionum` class ([30e0ae4a](https://github.com/pxgamer/arionum-php/commit/30e0ae4a2fb13c41f62971bc8b95a86914ad7246))
- Remove unnecessary `base_uri` definition for Guzzle ([a035dd3f](https://github.com/pxgamer/arionum-php/commit/a035dd3f6243b2b9c651f56439d3ab90037c666b))

## [v1.4.0] - 2018-10-09

### Added
- Add a constructor method for the `Arionum` class ([aec52f7e](https://github.com/pxgamer/arionum-php/commit/aec52f7ec5eab75790a83a960354cfa7a40d79fd))

### Deprecated
- Add notice of deprecation for the `setNodeAddress()` method ([7ae3927f](https://github.com/pxgamer/arionum-php/commit/7ae3927fa607adf4eba6d6bee9cb6a470beaf044))

## [v1.3.0] - 2018-08-28

### Added
- Add support for the `masternodes` method ([#4](https://github.com/pxgamer/arionum-php/issues/4))
- Add support for the `getAlias` method ([#5](https://github.com/pxgamer/arionum-php/issues/5))

## [v1.2.0] - 2018-08-06

### Changed
- Allow method chaining for Transactions ([#3](https://github.com/pxgamer/arionum-php/issues/3))
- Rename some variable names in the Transaction class ([6fb2d33](https://github.com/pxgamer/arionum-php/commit/6fb2d33542c74d9daf6d972a0d429986a49b0e22))

## [v1.1.2] - 2018-07-17

### Changed
- Allow build failures on Nightly builds ([e69cf12](https://github.com/pxgamer/arionum-php/commit/e69cf1243c40e8fa6fc0aa80676c4298fcaf2722))

## [v1.1.1] - 2018-07-17

### Changed
- Refactor all unit tests into separate classes ([589d589](https://github.com/pxgamer/arionum-php/commit/589d589ab734ee8243c73e9538248bb9b5b9109d))
- Refactor the names of the unit test methods ([589d589](https://github.com/pxgamer/arionum-php/commit/589d589ab734ee8243c73e9538248bb9b5b9109d))

## [v1.1.0] - 2018-06-28

### Added
- Add the send method ([#1](https://github.com/pxgamer/arionum-php/issues/1))

### Changed
- Remove exception line that will never be reached ([82d2f1f](https://github.com/pxgamer/arionum-php/commit/82d2f1f7ba38d63c288e9931c355d62a5e653a75))

## v1.0.0 - 2018-06-27

### Added
- Initial release

[Unreleased]: https://github.com/pxgamer/arionum-php/compare/v2.1.0...develop
[v2.1.0]: https://github.com/pxgamer/arionum-php/compare/v2.0.0...v2.1.0
[v2.0.0]: https://github.com/pxgamer/arionum-php/compare/v1.4.0...v2.0.0
[v1.4.0]: https://github.com/pxgamer/arionum-php/compare/v1.3.0...v1.4.0
[v1.3.0]: https://github.com/pxgamer/arionum-php/compare/v1.2.0...v1.3.0
[v1.2.0]: https://github.com/pxgamer/arionum-php/compare/v1.1.2...v1.2.0
[v1.1.2]: https://github.com/pxgamer/arionum-php/compare/v1.1.1...v1.1.2
[v1.1.1]: https://github.com/pxgamer/arionum-php/compare/v1.1.0...v1.1.1
[v1.1.0]: https://github.com/pxgamer/arionum-php/compare/v1.0.0...v1.1.0
