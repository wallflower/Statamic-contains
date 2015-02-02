# Statamic-contains
Check for value(s) in an array

## Installation

Place `mod.contains.php` in `_add-ons\contains\`.

## Usage

Given an array like this:

```
roles:
  - member
  - editor
  - contributor
```

You can check for values like this:

```
{{ if current_member.roles|contains:contributor }}
  Welcome contributor!
{{ /if }}

=> Welcome contributor! 
```

You can pass in multiple values, by separating them with a comma:

```
{{ if current_member.roles|contains:contributor,editor }}
  Welcome contributor or editor!
{{ /if }}

=> Welcome contributor or editor! 
```

There is an optional second parameter, that allows you to chose the logical operator (allowed: AND or OR, default: OR):

```
{{ if current_member.roles|contains:contributor,editor:AND }}
  Welcome contributor and editor!
{{ /if }}

=> Welcome contributor and editor! 
```

```
{{ if current_member.roles|contains:contributor,manager }}
  Welcome contributor or manager!
{{ else }}
  You need to be a contributor or a manager...
{{ /if }} 

=>  Welcome contributor or manager!
```

```
{{ if current_member.roles|contains:contributor,manager:OR }}
  Welcome contributor or manager!
{{ else }}
  You need to be a contributor or a manager...
{{ /if }} 

=>  Welcome contributor or manager!
```

```
{{ if current_member.roles|contains:contributor,manager:AND }}
  Welcome contributor and manager!
{{ else }}
  You need to be both a contributor and a manager...
{{ /if }} 

=> You need to be both a contributor and a manager...
```
