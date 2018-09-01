# Minus1 Plugin (for EE3/EE4)
Wrap this tag around any number to subtract one integer from it. Based on [Mike Heavers EE2 "Index" plugin](https://devot-ee.com/add-ons/mh-index) to start {count} from zero, but it will work for other things too.

This one also sanitizes tag input through EE's `security->xss_clean()` method, actually checks to see if it's numeric, and spits out [Bootstrap](https://getbootstrap.com) friendly error messages.

## Usage

### {exp:minus1}
Takes any numeric input between the tag pairs and subtracts 1 from it.

#### Example Usage
To output 1978 to your template, it would look like this in your page template:

```{exp:minus1}1979{/exp:minus1}```

It's real useful for dealing with other EE variables. Say you have one of those Carousel scripts that starts counting items from zero. Since the `{count}` variable in Channel Entries starts with 1, it can be a challenge to line up EE output with frontend JS. Not a problem! You can use Minus1 to drop the `{count}` value by one as it's being spit out to the template, allowing easy integration:

```{exp:minus1}{count}{/exp:minus1}```

## Changelog

### 1.0.1
- Tag input now explicitly needs to pass `ctype_digit` validation to run, as opposed to relying on the page-breaking `fatal_error` to stop the script.
- Errors now display inline in `<div class="alert alert-danger">` so they can be styled via a global stylesheet, or easily integrated into a Bootstrap project.
- Errors now logged to developer log.

### 1.0
- Initial release