/*
---

name: Locale.cs-CZ.Date

description: Date messages for Czech.

license: MIT-style license

authors:
  - Jan Černý chemiX

requires:
  - /Locale

provides: [Locale.cs-CZ.Date]

...
*/

Locale.define('cs-CZ', 'Date', {

	months: ['Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec'],
	months_abbr: ['ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'],
	days: ['Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota'],
	days_abbr: ['ne', 'po', 'út', 'st', 'čt', 'pá', 'so'],

	// Culture's date order: DD/MM/YYYY
	dateOrder: ['date', 'month', 'year'],
	shortDate: '%d/%m/%Y',
	shortTime: '%H:%M',
	AM: 'dop.',
	PM: 'odp.',

	// Date.Extras
	ordinal: '.',

	lessThanMinuteAgo: 'méně než minutou',
	minuteAgo: 'přibližně před minutou',
	minutesAgo: 'před {delta} minutami',
	hourAgo: 'přibližně před hodinou',
	hoursAgo: 'před {delta} hodinami',
	dayAgo: 'před dnem',
	daysAgo: 'před {delta} dni',

	lessThanMinuteUntil: 'před méně než minutou',
	minuteUntil: 'asi před minutou',
	minutesUntil: ' asi před {delta} minutami',
	hourUntil: 'asi před hodinou',
	hoursUntil: 'před {delta} hodinami',
	dayUntil: 'před dnem',
	daysUntil: 'před {delta} dni',
	weekUntil: 'před týdnem',
	weeksUntil: 'před {delta} týdny',
	monthUntil: 'před měsícem',
	monthsUntil: 'před {delta} měsíci',
	yearUntil: 'před rokem',
	yearsUntil: 'před {delta} lety'

});
