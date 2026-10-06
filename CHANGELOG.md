# Changelog

All notable changes to `laravel-unit-conversions` will be documented in this file

## 1.0.0 - 2026-10-06

### Added

- `Mass`, `Length`, `Capacity` and `Temperature` conversions with `from*()` and `to*()` methods
- One backed enum per quantity (`MassUnit`, `LengthUnit`, `CapacityUnit`, `AreaUnit`, `TimeUnit`, `SpeedUnit`, `TemperatureUnit`) implementing the `Unit` contract, so mixing quantities is a type error
- `LinearUnit` contract and `Concerns\LinearQuantity` base class: linear units convert through `factor()`, so adding a unit is one enum case
- Imperial and US units: ounce, pound, inch, foot, yard, mile, fluid ounce, pint and gallon, plus milligram
- `Area`, `Time`, `Speed`, `Energy`, `Power`, `Pressure`, `Force`, `Angle`, `Frequency`, `DataSize`, `Volume`, `FlowRate`, `Density`, `Torque`, `Acceleration`, `Voltage`, `ElectricCurrent` and `Resistance` quantities
- Conversions return a new immutable quantity of the same kind with `getValue()` and `getUnit()`, so they can be chained (`Length::fromKilometer(1.5)->toMeter()->toCentimeter()`)
- Laravel 13 support (PHP 8.4+)
