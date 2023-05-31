{{-- <x-mail::message> --}}
{{-- Greeting --}}
{{-- @if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif --}}

{{-- Intro Lines --}}
{{-- @foreach ($introLines as $line)
{{ $line }}

@endforeach --}}

{{-- Action Button --}}
{{-- @isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset --}}

{{-- Outro Lines --}}
{{-- @foreach ($outroLines as $line)
{{ $line }} --}}

{{-- @endforeach --}}

{{-- Salutation --}}
{{-- @if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif --}}

{{-- Subcopy --}}
{{-- @isset($actionText)
<x-slot:subcopy>
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- End -->

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fredoka&family=Fredoka+One&family=Kanit&family=Poppins&family=Tilt+Neon&family=Varela+Round&display=swap');

            /*
            ! tailwindcss v3.2.7 | MIT License | https://tailwindcss.com
            */

            /*
            1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
            2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
            */

            *,
            ::before,
            ::after {
            box-sizing: border-box !important;
            /* 1 */
            border-width: 0 !important;
            /* 2 */
            border-style: solid !important;
            /* 2 */
            border-color: #e5e7eb !important;
            /* 2 */
            }

            ::before,
            ::after {
            --tw-content: '' !important;
            }

            /*
            1. Use a consistent sensible line-height in all browsers.
            2. Prevent adjustments of font size after orientation changes in iOS.
            3. Use a more readable tab size.
            4. Use the user's configured `sans` font-family by default.
            5. Use the user's configured `sans` font-feature-settings by default.
            */

            html {
            line-height: 1.5 !important;
            /* 1 */
            -webkit-text-size-adjust: 100% !important;
            /* 2 */
            -moz-tab-size: 4 !important;
            /* 3 */
            -o-tab-size: 4 !important;
                tab-size: 4 !important;
            /* 3 */
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
            /* 4 */
            font-feature-settings: normal !important;
            /* 5 */
            }

            /*
            1. Remove the margin in all browsers.
            2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
            */

            body {
            margin: 0 !important;
            /* 1 */
            line-height: inherit !important;
            /* 2 */
            }

            /*
            1. Add the correct height in Firefox.
            2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
            3. Ensure horizontal rules are visible by default.
            */

            hr {
            height: 0 !important;
            /* 1 */
            color: inherit !important;
            /* 2 */
            border-top-width: 1px !important;
            /* 3 */
            }

            /*
            Add the correct text decoration in Chrome, Edge, and Safari.
            */

            abbr:where([title]) {
            -webkit-text-decoration: underline dotted !important;
                    text-decoration: underline dotted !important;
            }

            /*
            Remove the default font size and weight for headings.
            */

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
            font-size: inherit !important;
            font-weight: inherit !important;
            }

            /*
            Reset links to optimize for opt-in styling instead of opt-out.
            */

            a {
            color: inherit !important;
            text-decoration: inherit !important;
            }

            /*
            Add the correct font weight in Edge and Safari.
            */

            b,
            strong {
            font-weight: bolder !important;
            }

            /*
            1. Use the user's configured `mono` font family by default.
            2. Correct the odd `em` font sizing in all browsers.
            */

            code,
            kbd,
            samp,
            pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
            /* 1 */
            font-size: 1em !important;
            /* 2 */
            }

            /*
            Add the correct font size in all browsers.
            */

            small {
            font-size: 80% !important;
            }

            /*
            Prevent `sub` and `sup` elements from affecting the line height in all browsers.
            */

            sub,
            sup {
            font-size: 75% !important;
            line-height: 0 !important;
            position: relative !important;
            vertical-align: baseline !important;
            }

            sub {
            bottom: -0.25em !important;
            }

            sup {
            top: -0.5em !important;
            }

            /*
            1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
            2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
            3. Remove gaps between table borders by default.
            */

            table {
            text-indent: 0 !important;
            /* 1 */
            border-color: inherit !important;
            /* 2 */
            border-collapse: collapse !important;
            /* 3 */
            }

            /*
            1. Change the font styles in all browsers.
            2. Remove the margin in Firefox and Safari.
            3. Remove default padding in all browsers.
            */

            button,
            input,
            optgroup,
            select,
            textarea {
            font-family: inherit !important;
            /* 1 */
            font-size: 100% !important;
            /* 1 */
            font-weight: inherit !important;
            /* 1 */
            line-height: inherit !important;
            /* 1 */
            color: inherit !important;
            /* 1 */
            margin: 0 !important;
            /* 2 */
            padding: 0 !important;
            /* 3 */
            }

            /*
            Remove the inheritance of text transform in Edge and Firefox.
            */

            button,
            select {
            text-transform: none !important;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Remove default button styles.
            */

            button,
            [type='button'],
            [type='reset'],
            [type='submit'] {
            -webkit-appearance: button !important;
            /* 1 */
            background-color: transparent !important;
            /* 2 */
            background-image: none !important;
            /* 2 */
            }

            /*
            Use the modern Firefox focus style for all focusable elements.
            */

            :-moz-focusring {
            outline: auto !important;
            }

            /*
            Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
            */

            :-moz-ui-invalid {
            box-shadow: none !important;
            }

            /*
            Add the correct vertical alignment in Chrome and Firefox.
            */

            progress {
            vertical-align: baseline !important;
            }

            /*
            Correct the cursor style of increment and decrement buttons in Safari.
            */

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
            height: auto !important;
            }

            /*
            1. Correct the odd appearance in Chrome and Safari.
            2. Correct the outline style in Safari.
            */

            [type='search'] {
            -webkit-appearance: textfield !important;
            /* 1 */
            outline-offset: -2px !important;
            /* 2 */
            }

            /*
            Remove the inner padding in Chrome and Safari on macOS.
            */

            ::-webkit-search-decoration {
            -webkit-appearance: none !important;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Change font properties to `inherit` in Safari.
            */

            ::-webkit-file-upload-button {
            -webkit-appearance: button !important;
            /* 1 */
            font: inherit !important;
            /* 2 */
            }

            /*
            Add the correct display in Chrome and Safari.
            */

            summary {
            display: list-item !important;
            }

            /*
            Removes the default spacing and border for appropriate elements.
            */

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
            margin: 0 !important;
            }

            fieldset {
            margin: 0 !important;
            padding: 0 !important;
            }

            legend {
            padding: 0 !important;
            }

            ol,
            ul,
            menu {
            list-style: none !important;
            margin: 0 !important;
            padding: 0 !important;
            }

            /*
            Prevent resizing textareas horizontally by default.
            */

            textarea {
            resize: vertical !important;
            }

            /*
            1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
            2. Set the default placeholder color to the user's configured gray 400 color.
            */

            input::-moz-placeholder, textarea::-moz-placeholder {
            opacity: 1 !important;
            /* 1 */
            color: #9ca3af !important;
            /* 2 */
            }

            input::placeholder,
            textarea::placeholder {
            opacity: 1 !important;
            /* 1 */
            color: #9ca3af !important;
            /* 2 */
            }

            /*
            Set the default cursor for buttons.
            */

            button,
            [role="button"] {
            cursor: pointer !important;
            }

            /*
            Make sure disabled buttons don't get the pointer cursor.
            */

            :disabled {
            cursor: default !important;
            }

            /*
            1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
            2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
            This can trigger a poorly considered lint error in some tools but is included by design.
            */

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
            display: block !important;
            /* 1 */
            vertical-align: middle !important;
            /* 2 */
            }

            /*
            Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
            */

            img,
            video {
            max-width: 100% !important;
            height: auto !important;
            }

            /* Make elements with the HTML hidden attribute stay hidden by default */

            [hidden] {
            display: none !important;
            }

            [type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select{
            -webkit-appearance: none !important;
                -moz-appearance: none !important;
                    appearance: none !important;
            background-color: #fff !important;
            border-color: #6b7280 !important;
            border-width: 1px !important;
            border-radius: 0px !important;
            padding-top: 0.5rem !important;
            padding-right: 0.75rem !important;
            padding-bottom: 0.5rem !important;
            padding-left: 0.75rem !important;
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            --tw-shadow: 0 0 #0000 !important;
            }

            [type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus{
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/) !important;
            --tw-ring-offset-width: 0px !important;
            --tw-ring-offset-color: #fff !important;
            --tw-ring-color: #2563eb !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow) !important;
            border-color: #2563eb !important;
            }

            input::-moz-placeholder, textarea::-moz-placeholder{
            color: #6b7280 !important;
            opacity: 1 !important;
            }

            input::placeholder,textarea::placeholder{
            color: #6b7280 !important;
            opacity: 1 !important;
            }

            ::-webkit-datetime-edit-fields-wrapper{
            padding: 0 !important;
            }

            ::-webkit-date-and-time-value{
            min-height: 1.5em !important;
            }

            ::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field{
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            }

            select{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e") !important;
            background-position: right 0.5rem center !important;
            background-repeat: no-repeat !important;
            background-size: 1.5em 1.5em !important;
            padding-right: 2.5rem !important;
            -webkit-print-color-adjust: exact !important;
                    print-color-adjust: exact !important;
            }

            [multiple]{
            background-image: initial !important;
            background-position: initial !important;
            background-repeat: unset !important;
            background-size: initial !important;
            padding-right: 0.75rem !important;
            -webkit-print-color-adjust: unset !important;
                    print-color-adjust: unset !important;
            }

            [type='checkbox'],[type='radio']{
            -webkit-appearance: none !important;
                -moz-appearance: none !important;
                    appearance: none !important;
            padding: 0 !important;
            -webkit-print-color-adjust: exact !important;
                    print-color-adjust: exact !important;
            display: inline-block !important;
            vertical-align: middle !important;
            background-origin: border-box !important;
            -webkit-user-select: none !important;
                -moz-user-select: none !important;
                    user-select: none !important;
            flex-shrink: 0 !important;
            height: 1rem !important;
            width: 1rem !important;
            color: #2563eb !important;
            background-color: #fff !important;
            border-color: #6b7280 !important;
            border-width: 1px !important;
            --tw-shadow: 0 0 #0000 !important;
            }

            [type='checkbox']{
            border-radius: 0px !important;
            }

            [type='radio']{
            border-radius: 100% !important;
            }

            [type='checkbox']:focus,[type='radio']:focus{
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/) !important;
            --tw-ring-offset-width: 2px !important;
            --tw-ring-offset-color: #fff !important;
            --tw-ring-color: #2563eb !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow) !important;
            }

            [type='checkbox']:checked,[type='radio']:checked{
            border-color: transparent !important;
            background-color: currentColor !important;
            background-size: 100% 100% !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            }

            [type='checkbox']:checked{
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e") !important;
            }

            [type='radio']:checked{
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e") !important;
            }

            [type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus{
            border-color: transparent !important;
            background-color: currentColor !important;
            }

            [type='checkbox']:indeterminate{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e") !important;
            border-color: transparent !important;
            background-color: currentColor !important;
            background-size: 100% 100% !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            }

            [type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus{
            border-color: transparent !important;
            background-color: currentColor !important;
            }

            [type='file']{
            background: unset !important;
            border-color: inherit !important;
            border-width: 0 !important;
            border-radius: 0 !important;
            padding: 0 !important;
            font-size: unset !important;
            line-height: inherit !important;
            }

            [type='file']:focus{
            outline: 1px solid ButtonText !important;
            outline: 1px auto -webkit-focus-ring-color !important;
            }

            *, ::before, ::after{
            --tw-border-spacing-x: 0 !important;
            --tw-border-spacing-y: 0 !important;
            --tw-translate-x: 0 !important;
            --tw-translate-y: 0 !important;
            --tw-rotate: 0 !important;
            --tw-skew-x: 0 !important;
            --tw-skew-y: 0 !important;
            --tw-scale-x: 1 !important;
            --tw-scale-y: 1 !important;
            --tw-pan-x:   !important;
            --tw-pan-y:   !important;
            --tw-pinch-zoom:   !important;
            --tw-scroll-snap-strictness: proximity !important;
            --tw-ordinal:   !important;
            --tw-slashed-zero:   !important;
            --tw-numeric-figure:   !important;
            --tw-numeric-spacing:   !important;
            --tw-numeric-fraction:   !important;
            --tw-ring-inset:   !important;
            --tw-ring-offset-width: 0px !important;
            --tw-ring-offset-color: #fff !important;
            --tw-ring-color: rgb(59 130 246 / 0.5) !important;
            --tw-ring-offset-shadow: 0 0 #0000 !important;
            --tw-ring-shadow: 0 0 #0000 !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            --tw-blur:   !important;
            --tw-brightness:   !important;
            --tw-contrast:   !important;
            --tw-grayscale:   !important;
            --tw-hue-rotate:   !important;
            --tw-invert:   !important;
            --tw-saturate:   !important;
            --tw-sepia:   !important;
            --tw-drop-shadow:   !important;
            --tw-backdrop-blur:   !important;
            --tw-backdrop-brightness:   !important;
            --tw-backdrop-contrast:   !important;
            --tw-backdrop-grayscale:   !important;
            --tw-backdrop-hue-rotate:   !important;
            --tw-backdrop-invert:   !important;
            --tw-backdrop-opacity:   !important;
            --tw-backdrop-saturate:   !important;
            --tw-backdrop-sepia:   !important;
            }

            ::backdrop{
            --tw-border-spacing-x: 0 !important;
            --tw-border-spacing-y: 0 !important;
            --tw-translate-x: 0 !important;
            --tw-translate-y: 0 !important;
            --tw-rotate: 0 !important;
            --tw-skew-x: 0 !important;
            --tw-skew-y: 0 !important;
            --tw-scale-x: 1 !important;
            --tw-scale-y: 1 !important;
            --tw-pan-x:   !important;
            --tw-pan-y:   !important;
            --tw-pinch-zoom:   !important;
            --tw-scroll-snap-strictness: proximity !important;
            --tw-ordinal:   !important;
            --tw-slashed-zero:   !important;
            --tw-numeric-figure:   !important;
            --tw-numeric-spacing:   !important;
            --tw-numeric-fraction:   !important;
            --tw-ring-inset:   !important;
            --tw-ring-offset-width: 0px !important;
            --tw-ring-offset-color: #fff !important;
            --tw-ring-color: rgb(59 130 246 / 0.5) !important;
            --tw-ring-offset-shadow: 0 0 #0000 !important;
            --tw-ring-shadow: 0 0 #0000 !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            --tw-blur:   !important;
            --tw-brightness:   !important;
            --tw-contrast:   !important;
            --tw-grayscale:   !important;
            --tw-hue-rotate:   !important;
            --tw-invert:   !important;
            --tw-saturate:   !important;
            --tw-sepia:   !important;
            --tw-drop-shadow:   !important;
            --tw-backdrop-blur:   !important;
            --tw-backdrop-brightness:   !important;
            --tw-backdrop-contrast:   !important;
            --tw-backdrop-grayscale:   !important;
            --tw-backdrop-hue-rotate:   !important;
            --tw-backdrop-invert:   !important;
            --tw-backdrop-opacity:   !important;
            --tw-backdrop-saturate:   !important;
            --tw-backdrop-sepia:   !important;
            }

            .container{
            width: 100% !important;
            }

            @media (min-width: 640px){
            .container{
                max-width: 640px !important;
            }
            }

            @media (min-width: 768px){
            .container{
                max-width: 768px !important;
            }
            }

            @media (min-width: 1024px){
            .container{
                max-width: 1024px !important;
            }
            }

            @media (min-width: 1280px){
            .container{
                max-width: 1280px !important;
            }
            }

            @media (min-width: 1536px){
            .container{
                max-width: 1536px !important;
            }
            }

            .sr-only{
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border-width: 0 !important;
            }

            .pointer-events-none{
            pointer-events: none !important;
            }

            .pointer-events-auto{
            pointer-events: auto !important;
            }

            .visible{
            visibility: visible !important;
            }

            .invisible{
            visibility: hidden !important;
            }

            .fixed{
            position: fixed !important;
            }

            .absolute{
            position: absolute !important;
            }

            .relative{
            position: relative !important;
            }

            .inset-0{
            top: 0px !important;
            right: 0px !important;
            bottom: 0px !important;
            left: 0px !important;
            }

            .inset-y-0{
            top: 0px !important;
            bottom: 0px !important;
            }

            .-bottom-4{
            bottom: -1rem !important;
            }

            .-right-1{
            right: -0.25rem !important;
            }

            .-right-3{
            right: -0.75rem !important;
            }

            .-right-4{
            right: -1rem !important;
            }

            .-top-3{
            top: -0.75rem !important;
            }

            .-top-32{
            top: -8rem !important;
            }

            .bottom-1{
            bottom: 0.25rem !important;
            }

            .bottom-9{
            bottom: 2.25rem !important;
            }

            .left-0{
            left: 0px !important;
            }

            .left-3{
            left: 0.75rem !important;
            }

            .right-0{
            right: 0px !important;
            }

            .right-1{
            right: 0.25rem !important;
            }

            .right-2{
            right: 0.5rem !important;
            }

            .right-5{
            right: 1.25rem !important;
            }

            .top-0{
            top: 0px !important;
            }

            .top-5{
            top: 1.25rem !important;
            }

            .top-6{
            top: 1.5rem !important;
            }

            .z-0{
            z-index: 0 !important;
            }

            .z-10{
            z-index: 10 !important;
            }

            .z-20{
            z-index: 20 !important;
            }

            .z-30{
            z-index: 30 !important;
            }

            .z-40{
            z-index: 40 !important;
            }

            .order-1{
            order: 1 !important;
            }

            .order-2{
            order: 2 !important;
            }

            .order-3{
            order: 3 !important;
            }

            .order-4{
            order: 4 !important;
            }

            .order-5{
            order: 5 !important;
            }

            .order-6{
            order: 6 !important;
            }

            .m-2{
            margin: 0.5rem !important;
            }

            .m-3{
            margin: 0.75rem !important;
            }

            .m-4{
            margin: 1rem !important;
            }

            .m-5{
            margin: 1.25rem !important;
            }

            .m-7{
            margin: 1.75rem !important;
            }

            .-mx-1{
            margin-left: -0.25rem !important;
            margin-right: -0.25rem !important;
            }

            .-mx-1\.5{
            margin-left: -0.375rem !important;
            margin-right: -0.375rem !important;
            }

            .-my-1{
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
            }

            .-my-1\.5{
            margin-top: -0.375rem !important;
            margin-bottom: -0.375rem !important;
            }

            .-my-2{
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
            }

            .mx-2{
            margin-left: 0.5rem !important;
            margin-right: 0.5rem !important;
            }

            .mx-3{
            margin-left: 0.75rem !important;
            margin-right: 0.75rem !important;
            }

            .mx-6{
            margin-left: 1.5rem !important;
            margin-right: 1.5rem !important;
            }

            .mx-auto{
            margin-left: auto !important;
            margin-right: auto !important;
            }

            .my-2{
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
            }

            .my-4{
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
            }

            .-ml-px{
            margin-left: -1px !important;
            }

            .-mr-2{
            margin-right: -0.5rem !important;
            }

            .-mt-px{
            margin-top: -1px !important;
            }

            .mb-0{
            margin-bottom: 0px !important;
            }

            .mb-1{
            margin-bottom: 0.25rem !important;
            }

            .mb-3{
            margin-bottom: 0.75rem !important;
            }

            .mb-4{
            margin-bottom: 1rem !important;
            }

            .mb-5{
            margin-bottom: 1.25rem !important;
            }

            .mb-8{
            margin-bottom: 2rem !important;
            }

            .ml-1{
            margin-left: 0.25rem !important;
            }

            .ml-12{
            margin-left: 3rem !important;
            }

            .ml-2{
            margin-left: 0.5rem !important;
            }

            .ml-3{
            margin-left: 0.75rem !important;
            }

            .ml-4{
            margin-left: 1rem !important;
            }

            .ml-auto{
            margin-left: auto !important;
            }

            .mr-1{
            margin-right: 0.25rem !important;
            }

            .mr-2{
            margin-right: 0.5rem !important;
            }

            .mr-3{
            margin-right: 0.75rem !important;
            }

            .mr-4{
            margin-right: 1rem !important;
            }

            .mr-5{
            margin-right: 1.25rem !important;
            }

            .mr-xs{
            margin-right: 0.1rem !important;
            }

            .mt-0{
            margin-top: 0px !important;
            }

            .mt-1{
            margin-top: 0.25rem !important;
            }

            .mt-2{
            margin-top: 0.5rem !important;
            }

            .mt-3{
            margin-top: 0.75rem !important;
            }

            .mt-4{
            margin-top: 1rem !important;
            }

            .mt-5{
            margin-top: 1.25rem !important;
            }

            .mt-6{
            margin-top: 1.5rem !important;
            }

            .mt-7{
            margin-top: 1.75rem !important;
            }

            .mt-8{
            margin-top: 2rem !important;
            }

            .block{
            display: block !important;
            }

            .inline-block{
            display: inline-block !important;
            }

            .inline{
            display: inline !important;
            }

            .flex{
            display: flex !important;
            }

            .inline-flex{
            display: inline-flex !important;
            }

            .\!table{
            display: table !important;
            }

            .table{
            display: table !important;
            }

            .grid{
            display: grid !important;
            }

            .hidden{
            display: none !important;
            }

            .h-1{
            height: 0.25rem !important;
            }

            .h-11{
            height: 2.75rem !important;
            }

            .h-12{
            height: 3rem !important;
            }

            .h-16{
            height: 4rem !important;
            }

            .h-2{
            height: 0.5rem !important;
            }

            .h-20{
            height: 5rem !important;
            }

            .h-24{
            height: 6rem !important;
            }

            .h-3{
            height: 0.75rem !important;
            }

            .h-4{
            height: 1rem !important;
            }

            .h-40{
            height: 10rem !important;
            }

            .h-48{
            height: 12rem !important;
            }

            .h-5{
            height: 1.25rem !important;
            }

            .h-6{
            height: 1.5rem !important;
            }

            .h-8{
            height: 2rem !important;
            }

            .h-9{
            height: 2.25rem !important;
            }

            .h-auto{
            height: auto !important;
            }

            .h-fit{
            height: -moz-fit-content !important;
            height: fit-content !important;
            }

            .h-full{
            height: 100% !important;
            }

            .min-h-full{
            min-height: 100% !important;
            }

            .min-h-screen{
            min-height: 100vh !important;
            }

            .w-0{
            width: 0px !important;
            }

            .w-1{
            width: 0.25rem !important;
            }

            .w-100{
            width: 30rem !important;
            }

            .w-11{
            width: 2.75rem !important;
            }

            .w-11\/12{
            width: 91.666667% !important;
            }

            .w-12{
            width: 3rem !important;
            }

            .w-14{
            width: 3.5rem !important;
            }

            .w-2{
            width: 0.5rem !important;
            }

            .w-20{
            width: 5rem !important;
            }

            .w-3{
            width: 0.75rem !important;
            }

            .w-4{
            width: 1rem !important;
            }

            .w-40{
            width: 10rem !important;
            }

            .w-48{
            width: 12rem !important;
            }

            .w-5{
            width: 1.25rem !important;
            }

            .w-52{
            width: 13rem !important;
            }

            .w-6{
            width: 1.5rem !important;
            }

            .w-60{
            width: 15rem !important;
            }

            .w-64{
            width: 16rem !important;
            }

            .w-8{
            width: 2rem !important;
            }

            .w-auto{
            width: auto !important;
            }

            .w-fit{
            width: -moz-fit-content !important;
            width: fit-content !important;
            }

            .w-full{
            width: 100% !important;
            }

            .min-w-0{
            min-width: 0px !important;
            }

            .min-w-\[240px\]{
            min-width: 240px !important;
            }

            .min-w-full{
            min-width: 100% !important;
            }

            .min-w-max{
            min-width: -moz-max-content !important;
            min-width: max-content !important;
            }

            .max-w-2xl{
            max-width: 42rem !important;
            }

            .max-w-3xl{
            max-width: 48rem !important;
            }

            .max-w-4xl{
            max-width: 56rem !important;
            }

            .max-w-5xl{
            max-width: 64rem !important;
            }

            .max-w-6xl{
            max-width: 72rem !important;
            }

            .max-w-7xl{
            max-width: 80rem !important;
            }

            .max-w-lg{
            max-width: 32rem !important;
            }

            .max-w-md{
            max-width: 28rem !important;
            }

            .max-w-namew{
            max-width: 8rem !important;
            }

            .max-w-sm{
            max-width: 24rem !important;
            }

            .max-w-xl{
            max-width: 36rem !important;
            }

            .flex-1{
            flex: 1 1 0% !important;
            }

            .flex-shrink-0{
            flex-shrink: 0 !important;
            }

            .shrink-0{
            flex-shrink: 0 !important;
            }

            .flex-grow{
            flex-grow: 1 !important;
            }

            .-translate-x-full{
            --tw-translate-x: -100% !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .translate-x-0{
            --tw-translate-x: 0px !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .translate-x-5{
            --tw-translate-x: 1.25rem !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .translate-x-full{
            --tw-translate-x: 100% !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .translate-y-0{
            --tw-translate-y: 0px !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .translate-y-4{
            --tw-translate-y: 1rem !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .-rotate-90{
            --tw-rotate: -90deg !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .scale-100{
            --tw-scale-x: 1 !important;
            --tw-scale-y: 1 !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .scale-95{
            --tw-scale-x: .95 !important;
            --tw-scale-y: .95 !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .transform{
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            @keyframes spin{
            to{
                transform: rotate(360deg) !important;
            }
            }

            .animate-spin{
            animation: spin 1s linear infinite !important;
            }

            .cursor-default{
            cursor: default !important;
            }

            .cursor-not-allowed{
            cursor: not-allowed !important;
            }

            .cursor-pointer{
            cursor: pointer !important;
            }

            .select-none{
            -webkit-user-select: none !important;
                -moz-user-select: none !important;
                    user-select: none !important;
            }

            .grid-flow-col{
            grid-auto-flow: column !important;
            }

            .grid-cols-1{
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            }

            .grid-cols-2{
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }

            .grid-cols-3{
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }

            .flex-row{
            flex-direction: row !important;
            }

            .flex-col{
            flex-direction: column !important;
            }

            .flex-wrap{
            flex-wrap: wrap !important;
            }

            .content-start{
            align-content: flex-start !important;
            }

            .items-start{
            align-items: flex-start !important;
            }

            .items-end{
            align-items: flex-end !important;
            }

            .items-center{
            align-items: center !important;
            }

            .justify-start{
            justify-content: flex-start !important;
            }

            .justify-end{
            justify-content: flex-end !important;
            }

            .justify-center{
            justify-content: center !important;
            }

            .justify-between{
            justify-content: space-between !important;
            }

            .justify-items-center{
            justify-items: center !important;
            }

            .gap-1{
            gap: 0.25rem !important;
            }

            .gap-10{
            gap: 2.5rem !important;
            }

            .gap-2{
            gap: 0.5rem !important;
            }

            .gap-3{
            gap: 0.75rem !important;
            }

            .gap-4{
            gap: 1rem !important;
            }

            .gap-5{
            gap: 1.25rem !important;
            }

            .space-x-6 > :not([hidden]) ~ :not([hidden]){
            --tw-space-x-reverse: 0 !important;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse)) !important;
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse))) !important;
            }

            .space-x-8 > :not([hidden]) ~ :not([hidden]){
            --tw-space-x-reverse: 0 !important;
            margin-right: calc(2rem * var(--tw-space-x-reverse)) !important;
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse))) !important;
            }

            .space-y-1 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0 !important;
            margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse))) !important;
            margin-bottom: calc(0.25rem * var(--tw-space-y-reverse)) !important;
            }

            .space-y-4 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0 !important;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse))) !important;
            margin-bottom: calc(1rem * var(--tw-space-y-reverse)) !important;
            }

            .space-y-6 > :not([hidden]) ~ :not([hidden]){
            --tw-space-y-reverse: 0 !important;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse))) !important;
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse)) !important;
            }

            .divide-y > :not([hidden]) ~ :not([hidden]){
            --tw-divide-y-reverse: 0 !important;
            border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse))) !important;
            border-bottom-width: calc(1px * var(--tw-divide-y-reverse)) !important;
            }

            .divide-gray-200 > :not([hidden]) ~ :not([hidden]){
            --tw-divide-opacity: 1 !important;
            border-color: rgb(229 231 235 / var(--tw-divide-opacity)) !important;
            }

            .overflow-auto{
            overflow: auto !important;
            }

            .overflow-hidden{
            overflow: hidden !important;
            }

            .overflow-x-auto{
            overflow-x: auto !important;
            }

            .overflow-y-auto{
            overflow-y: auto !important;
            }

            .overflow-y-hidden{
            overflow-y: hidden !important;
            }

            .text-ellipsis{
            text-overflow: ellipsis !important;
            }

            .whitespace-nowrap{
            white-space: nowrap !important;
            }

            .break-words{
            overflow-wrap: break-word !important;
            }

            .break-all{
            word-break: break-all !important;
            }

            .rounded{
            border-radius: 0.25rem !important;
            }

            .rounded-2xl{
            border-radius: 1rem !important;
            }

            .rounded-50{
            border-radius: 50px !important;
            }

            .rounded-full{
            border-radius: 9999px !important;
            }

            .rounded-lg{
            border-radius: 0.5rem !important;
            }

            .rounded-md{
            border-radius: 0.375rem !important;
            }

            .rounded-none{
            border-radius: 0px !important;
            }

            .rounded-xl{
            border-radius: 0.75rem !important;
            }

            .rounded-l-md{
            border-top-left-radius: 0.375rem !important;
            border-bottom-left-radius: 0.375rem !important;
            }

            .rounded-r-3xl{
            border-top-right-radius: 1.5rem !important;
            border-bottom-right-radius: 1.5rem !important;
            }

            .rounded-r-md{
            border-top-right-radius: 0.375rem !important;
            border-bottom-right-radius: 0.375rem !important;
            }

            .rounded-t-2xl{
            border-top-left-radius: 1rem !important;
            border-top-right-radius: 1rem !important;
            }

            .rounded-bl-md{
            border-bottom-left-radius: 0.375rem !important;
            }

            .rounded-bl-none{
            border-bottom-left-radius: 0px !important;
            }

            .rounded-br-3xl{
            border-bottom-right-radius: 1.5rem !important;
            }

            .rounded-br-none{
            border-bottom-right-radius: 0px !important;
            }

            .rounded-tl-none{
            border-top-left-radius: 0px !important;
            }

            .rounded-tr-none{
            border-top-right-radius: 0px !important;
            }

            .border{
            border-width: 1px !important;
            }

            .border-0{
            border-width: 0px !important;
            }

            .border-2{
            border-width: 2px !important;
            }

            .border-4{
            border-width: 4px !important;
            }

            .border-y{
            border-top-width: 1px !important;
            border-bottom-width: 1px !important;
            }

            .border-b{
            border-bottom-width: 1px !important;
            }

            .border-b-0{
            border-bottom-width: 0px !important;
            }

            .border-l-0{
            border-left-width: 0px !important;
            }

            .border-l-4{
            border-left-width: 4px !important;
            }

            .border-r{
            border-right-width: 1px !important;
            }

            .border-r-0{
            border-right-width: 0px !important;
            }

            .border-t{
            border-top-width: 1px !important;
            }

            .border-t-0{
            border-top-width: 0px !important;
            }

            .border-solid{
            border-style: solid !important;
            }

            .border-b5{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 180 216 / var(--tw-border-opacity)) !important;
            }

            .border-b6{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            }

            .border-blue-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(96 165 250 / var(--tw-border-opacity)) !important;
            }

            .border-gray-100{
            --tw-border-opacity: 1 !important;
            border-color: rgb(243 244 246 / var(--tw-border-opacity)) !important;
            }

            .border-gray-200{
            --tw-border-opacity: 1 !important;
            border-color: rgb(229 231 235 / var(--tw-border-opacity)) !important;
            }

            .border-gray-300{
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .border-gray-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(156 163 175 / var(--tw-border-opacity)) !important;
            }

            .border-gray-600{
            --tw-border-opacity: 1 !important;
            border-color: rgb(75 85 99 / var(--tw-border-opacity)) !important;
            }

            .border-green-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(74 222 128 / var(--tw-border-opacity)) !important;
            }

            .border-indigo-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(129 140 248 / var(--tw-border-opacity)) !important;
            }

            .border-indigo-500{
            --tw-border-opacity: 1 !important;
            border-color: rgb(99 102 241 / var(--tw-border-opacity)) !important;
            }

            .border-red-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(248 113 113 / var(--tw-border-opacity)) !important;
            }

            .border-transparent{
            border-color: transparent !important;
            }

            .border-yellow-400{
            --tw-border-opacity: 1 !important;
            border-color: rgb(250 204 21 / var(--tw-border-opacity)) !important;
            }

            .border-b-gray-300{
            --tw-border-opacity: 1 !important;
            border-bottom-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .border-l-b6{
            --tw-border-opacity: 1 !important;
            border-left-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            }

            .border-l-blue-500{
            --tw-border-opacity: 1 !important;
            border-left-color: rgb(59 130 246 / var(--tw-border-opacity)) !important;
            }

            .border-l-green-500{
            --tw-border-opacity: 1 !important;
            border-left-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            }

            .border-l-red-500{
            --tw-border-opacity: 1 !important;
            border-left-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            }

            .border-r-gray-300{
            --tw-border-opacity: 1 !important;
            border-right-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .bg-b4{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(72 202 228 / var(--tw-bg-opacity)) !important;
            }

            .bg-b5{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            }

            .bg-b6{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            }

            .bg-b7{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 119 182 / var(--tw-bg-opacity)) !important;
            }

            .bg-black{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity)) !important;
            }

            .bg-black\/75{
            background-color: rgb(0 0 0 / 0.75) !important;
            }

            .bg-blue-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 246 255 / var(--tw-bg-opacity)) !important;
            }

            .bg-gray-100{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity)) !important;
            }

            .bg-gray-200{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            }

            .bg-gray-400{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(156 163 175 / var(--tw-bg-opacity)) !important;
            }

            .bg-gray-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
            }

            .bg-green-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(240 253 244 / var(--tw-bg-opacity)) !important;
            }

            .bg-green-500{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            }

            .bg-indigo-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity)) !important;
            }

            .bg-indigo-500{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(99 102 241 / var(--tw-bg-opacity)) !important;
            }

            .bg-orange-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 247 237 / var(--tw-bg-opacity)) !important;
            }

            .bg-purple-500{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(168 85 247 / var(--tw-bg-opacity)) !important;
            }

            .bg-red-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity)) !important;
            }

            .bg-red-500{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            }

            .bg-transparent{
            background-color: transparent !important;
            }

            .bg-white{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            }

            .bg-yellow-50{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(254 252 232 / var(--tw-bg-opacity)) !important;
            }

            .bg-yellow-500{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(234 179 8 / var(--tw-bg-opacity)) !important;
            }

            .bg-opacity-20{
            --tw-bg-opacity: 0.2 !important;
            }

            .bg-opacity-70{
            --tw-bg-opacity: 0.7 !important;
            }

            .fill-current{
            fill: currentColor !important;
            }

            .p-0{
            padding: 0px !important;
            }

            .p-1{
            padding: 0.25rem !important;
            }

            .p-1\.5{
            padding: 0.375rem !important;
            }

            .p-10{
            padding: 2.5rem !important;
            }

            .p-2{
            padding: 0.5rem !important;
            }

            .p-3{
            padding: 0.75rem !important;
            }

            .p-4{
            padding: 1rem !important;
            }

            .p-5{
            padding: 1.25rem !important;
            }

            .p-6{
            padding: 1.5rem !important;
            }

            .p-7{
            padding: 1.75rem !important;
            }

            .p-8{
            padding: 2rem !important;
            }

            .px-1{
            padding-left: 0.25rem !important;
            padding-right: 0.25rem !important;
            }

            .px-2{
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
            }

            .px-2\.5{
            padding-left: 0.625rem !important;
            padding-right: 0.625rem !important;
            }

            .px-3{
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            }

            .px-4{
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            }

            .px-5{
            padding-left: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .px-6{
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
            }

            .py-1{
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
            }

            .py-10{
            padding-top: 2.5rem !important;
            padding-bottom: 2.5rem !important;
            }

            .py-12{
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
            }

            .py-2{
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            }

            .py-3{
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
            }

            .py-4{
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
            }

            .py-6{
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
            }

            .pb-1{
            padding-bottom: 0.25rem !important;
            }

            .pb-3{
            padding-bottom: 0.75rem !important;
            }

            .pb-4{
            padding-bottom: 1rem !important;
            }

            .pb-6{
            padding-bottom: 1.5rem !important;
            }

            .pl-0{
            padding-left: 0px !important;
            }

            .pl-2{
            padding-left: 0.5rem !important;
            }

            .pl-3{
            padding-left: 0.75rem !important;
            }

            .pr-0{
            padding-right: 0px !important;
            }

            .pr-2{
            padding-right: 0.5rem !important;
            }

            .pr-3{
            padding-right: 0.75rem !important;
            }

            .pr-4{
            padding-right: 1rem !important;
            }

            .pr-6{
            padding-right: 1.5rem !important;
            }

            .pt-0{
            padding-top: 0px !important;
            }

            .pt-16{
            padding-top: 4rem !important;
            }

            .pt-2{
            padding-top: 0.5rem !important;
            }

            .pt-3{
            padding-top: 0.75rem !important;
            }

            .pt-4{
            padding-top: 1rem !important;
            }

            .pt-5{
            padding-top: 1.25rem !important;
            }

            .pt-6{
            padding-top: 1.5rem !important;
            }

            .pt-8{
            padding-top: 2rem !important;
            }

            .text-left{
            text-align: left !important;
            }

            .text-center{
            text-align: center !important;
            }

            .text-justify{
            text-align: justify !important;
            }

            .align-middle{
            vertical-align: middle !important;
            }

            .align-bottom{
            vertical-align: bottom !important;
            }

            .font-sans{
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
            }

            .text-2xl{
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            }

            .text-3xl{
            font-size: 1.875rem !important;
            line-height: 2.25rem !important;
            }

            .text-4xl{
            font-size: 2.25rem !important;
            line-height: 2.5rem !important;
            }

            .text-base{
            font-size: 1rem !important;
            line-height: 1.5rem !important;
            }

            .text-lg{
            font-size: 1.125rem !important;
            line-height: 1.75rem !important;
            }

            .text-sm{
            font-size: 0.875rem !important;
            line-height: 1.25rem !important;
            }

            .text-xl{
            font-size: 1.25rem !important;
            line-height: 1.75rem !important;
            }

            .text-xs{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            .text-xs0{
            font-size: 0.70rem !important;
            }

            .text-xs1{
            font-size: 0.60rem !important;
            }

            .text-xs2{
            font-size: 0.50rem !important;
            }

            .text-xs3{
            font-size: 0.40rem !important;
            }

            .font-bold{
            font-weight: 700 !important;
            }

            .font-medium{
            font-weight: 500 !important;
            }

            .font-normal{
            font-weight: 400 !important;
            }

            .font-semibold{
            font-weight: 600 !important;
            }

            .uppercase{
            text-transform: uppercase !important;
            }

            .italic{
            font-style: italic !important;
            }

            .leading-5{
            line-height: 1.25rem !important;
            }

            .leading-6{
            line-height: 1.5rem !important;
            }

            .leading-7{
            line-height: 1.75rem !important;
            }

            .leading-tight{
            line-height: 1.25 !important;
            }

            .tracking-wide{
            letter-spacing: 0.025em !important;
            }

            .tracking-wider{
            letter-spacing: 0.05em !important;
            }

            .tracking-widest{
            letter-spacing: 0.1em !important;
            }

            .text-b5{
            --tw-text-opacity: 1 !important;
            color: rgb(0 180 216 / var(--tw-text-opacity)) !important;
            }

            .text-b6{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .text-blc1{
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .text-blue-400{
            --tw-text-opacity: 1 !important;
            color: rgb(96 165 250 / var(--tw-text-opacity)) !important;
            }

            .text-blue-500{
            --tw-text-opacity: 1 !important;
            color: rgb(59 130 246 / var(--tw-text-opacity)) !important;
            }

            .text-blue-700{
            --tw-text-opacity: 1 !important;
            color: rgb(29 78 216 / var(--tw-text-opacity)) !important;
            }

            .text-blue-800{
            --tw-text-opacity: 1 !important;
            color: rgb(30 64 175 / var(--tw-text-opacity)) !important;
            }

            .text-gray-200{
            --tw-text-opacity: 1 !important;
            color: rgb(229 231 235 / var(--tw-text-opacity)) !important;
            }

            .text-gray-300{
            --tw-text-opacity: 1 !important;
            color: rgb(209 213 219 / var(--tw-text-opacity)) !important;
            }

            .text-gray-400{
            --tw-text-opacity: 1 !important;
            color: rgb(156 163 175 / var(--tw-text-opacity)) !important;
            }

            .text-gray-500{
            --tw-text-opacity: 1 !important;
            color: rgb(107 114 128 / var(--tw-text-opacity)) !important;
            }

            .text-gray-600{
            --tw-text-opacity: 1 !important;
            color: rgb(75 85 99 / var(--tw-text-opacity)) !important;
            }

            .text-gray-700{
            --tw-text-opacity: 1 !important;
            color: rgb(55 65 81 / var(--tw-text-opacity)) !important;
            }

            .text-gray-800{
            --tw-text-opacity: 1 !important;
            color: rgb(31 41 55 / var(--tw-text-opacity)) !important;
            }

            .text-gray-900{
            --tw-text-opacity: 1 !important;
            color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
            }

            .text-green-400{
            --tw-text-opacity: 1 !important;
            color: rgb(74 222 128 / var(--tw-text-opacity)) !important;
            }

            .text-green-500{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .text-green-600{
            --tw-text-opacity: 1 !important;
            color: rgb(22 163 74 / var(--tw-text-opacity)) !important;
            }

            .text-green-700{
            --tw-text-opacity: 1 !important;
            color: rgb(21 128 61 / var(--tw-text-opacity)) !important;
            }

            .text-green-800{
            --tw-text-opacity: 1 !important;
            color: rgb(22 101 52 / var(--tw-text-opacity)) !important;
            }

            .text-indigo-500{
            --tw-text-opacity: 1 !important;
            color: rgb(99 102 241 / var(--tw-text-opacity)) !important;
            }

            .text-indigo-600{
            --tw-text-opacity: 1 !important;
            color: rgb(79 70 229 / var(--tw-text-opacity)) !important;
            }

            .text-indigo-700{
            --tw-text-opacity: 1 !important;
            color: rgb(67 56 202 / var(--tw-text-opacity)) !important;
            }

            .text-orange-500{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .text-orange-700{
            --tw-text-opacity: 1 !important;
            color: rgb(194 65 12 / var(--tw-text-opacity)) !important;
            }

            .text-orange-800{
            --tw-text-opacity: 1 !important;
            color: rgb(154 52 18 / var(--tw-text-opacity)) !important;
            }

            .text-purple-500{
            --tw-text-opacity: 1 !important;
            color: rgb(168 85 247 / var(--tw-text-opacity)) !important;
            }

            .text-red-400{
            --tw-text-opacity: 1 !important;
            color: rgb(248 113 113 / var(--tw-text-opacity)) !important;
            }

            .text-red-500{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .text-red-600{
            --tw-text-opacity: 1 !important;
            color: rgb(220 38 38 / var(--tw-text-opacity)) !important;
            }

            .text-red-700{
            --tw-text-opacity: 1 !important;
            color: rgb(185 28 28 / var(--tw-text-opacity)) !important;
            }

            .text-red-800{
            --tw-text-opacity: 1 !important;
            color: rgb(153 27 27 / var(--tw-text-opacity)) !important;
            }

            .text-white{
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .text-yellow-400{
            --tw-text-opacity: 1 !important;
            color: rgb(250 204 21 / var(--tw-text-opacity)) !important;
            }

            .text-yellow-500{
            --tw-text-opacity: 1 !important;
            color: rgb(234 179 8 / var(--tw-text-opacity)) !important;
            }

            .underline{
            text-decoration-line: underline !important;
            }

            .antialiased{
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
            }

            .opacity-0{
            opacity: 0 !important;
            }

            .opacity-100{
            opacity: 1 !important;
            }

            .opacity-25{
            opacity: 0.25 !important;
            }

            .opacity-50{
            opacity: 0.5 !important;
            }

            .opacity-75{
            opacity: 0.75 !important;
            }

            .shadow{
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .shadow-lg{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .shadow-md{
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .shadow-sm{
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05) !important;
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .shadow-xl{
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .ring-0{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            }

            .ring-1{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            }

            .ring-black{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity)) !important;
            }

            .ring-gray-300{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity)) !important;
            }

            .ring-indigo-500{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity)) !important;
            }

            .ring-red-500{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            }

            .ring-opacity-5{
            --tw-ring-opacity: 0.05 !important;
            }

            .blur{
            --tw-blur: blur(8px) !important;
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
            }

            .blur-sm{
            --tw-blur: blur(4px) !important;
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
            }

            .filter{
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
            }

            .transition{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter !important;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter !important;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            }

            .transition-all{
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            }

            .transition-colors{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            }

            .duration-150{
            transition-duration: 150ms !important;
            }

            .duration-300{
            transition-duration: 300ms !important;
            }

            .duration-500{
            transition-duration: 500ms !important;
            }

            .ease-in-out{
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .ease-out{
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1) !important;
            }

            /* font-family: 'Bebas Neue', cursive !important;
            font-family: 'Fredoka', sans-serif !important;
            font-family: 'Fredoka One', cursive !important;
            font-family: 'Poppins', sans-serif !important;
            font-family: 'Tilt Neon', cursive !important;
            font-family: 'Varela Round', sans-serif !important; */

            * {
            font-family: 'Tilt Neon', sans-serif !important;
            scroll-behavior: smooth !important;
            font-weight: 400 !important;
            letter-spacing: 0.05em !important;
            }

            *::-moz-selection{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            *::selection{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .input p{
            margin: 0px !important;
            width: 100% !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .input p.sm\:max-w-sm,.input p.sm\:max-w-md,.input p.sm\:max-w-lg,.input p.sm\:max-w-xl,.input p.sm\:max-w-2xl,.input p.sm\:max-w-3xl,.input p.sm\:max-w-4xl,.input p.sm\:max-w-5xl,.input p.sm\:max-w-6xl,.input p.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .input p.sm\:max-w-sm > div,.input p.sm\:max-w-md > div,.input p.sm\:max-w-lg > div,.input p.sm\:max-w-xl > div,.input p.sm\:max-w-2xl > div,.input p.sm\:max-w-3xl > div,.input p.sm\:max-w-4xl > div,.input p.sm\:max-w-5xl > div,.input p.sm\:max-w-6xl > div,.input p.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            @media (max-width: 640px) {
            .input p.sm\:max-w-sm > div,.input p.sm\:max-w-md > div,.input p.sm\:max-w-lg > div,.input p.sm\:max-w-xl > div,.input p.sm\:max-w-2xl > div,.input p.sm\:max-w-3xl > div,.input p.sm\:max-w-4xl > div,.input p.sm\:max-w-5xl > div,.input p.sm\:max-w-6xl > div,.input p.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .input p {
            font-size: .70rem !important;
            }

            label, input, span, p {
            font-family: 'Tilt Neon', sans-serif !important;
            }

            input, select, textarea{
            font-size: 0.70rem !important;
            }

            .background-image {
            background-position: center !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            }

            .title {
            font-family: 'Kanit', sans-serif !important;
            }

            span{
            white-space: nowrap !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            html, body {
            height: 100% !important;
            }

            #app {
            height: inherit !important;
            }

            #app > div {
            height: inherit !important;
            }

            .error-help-block{
            margin-top: 0.25rem !important;
            width: 100% !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .error-help-block.sm\:max-w-sm,.error-help-block.sm\:max-w-md,.error-help-block.sm\:max-w-lg,.error-help-block.sm\:max-w-xl,.error-help-block.sm\:max-w-2xl,.error-help-block.sm\:max-w-3xl,.error-help-block.sm\:max-w-4xl,.error-help-block.sm\:max-w-5xl,.error-help-block.sm\:max-w-6xl,.error-help-block.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .error-help-block.sm\:max-w-sm > div,.error-help-block.sm\:max-w-md > div,.error-help-block.sm\:max-w-lg > div,.error-help-block.sm\:max-w-xl > div,.error-help-block.sm\:max-w-2xl > div,.error-help-block.sm\:max-w-3xl > div,.error-help-block.sm\:max-w-4xl > div,.error-help-block.sm\:max-w-5xl > div,.error-help-block.sm\:max-w-6xl > div,.error-help-block.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            @media (max-width: 640px) {
            .error-help-block.sm\:max-w-sm > div,.error-help-block.sm\:max-w-md > div,.error-help-block.sm\:max-w-lg > div,.error-help-block.sm\:max-w-xl > div,.error-help-block.sm\:max-w-2xl > div,.error-help-block.sm\:max-w-3xl > div,.error-help-block.sm\:max-w-4xl > div,.error-help-block.sm\:max-w-5xl > div,.error-help-block.sm\:max-w-6xl > div,.error-help-block.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .error-help-block{
            font-size: .70rem !important;
            }

            .iti-mobile .intl-tel-input .country-list {
            max-height: 100% !important;
            width: 100% !important;
            }

            .intl-tel-input {
            width: 100% !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input .selected-flag .iti-flag {
            position: relative !important;
            top: 0 !important;
            bottom: 0 !important;
            margin: 0 !important;
            }

            .intl-tel-input .flag-container {
            position: absolute !important;
            top: 0 !important;
            bottom: 0 !important;
            right: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input .selected-flag .iti-arrow {
            position: relative !important;
            top: 0 !important;
            margin-top: 0 !important;
            right: 0 !important;
            width: 0 !important;
            height: 0 !important;
            border-radius: 50px !important;
            border-left: 5px solid transparent !important;
            border-right: 5px solid transparent !important;
            border-top: 5px solid #555 !important;
            }

            .intl-tel-input .country-list {
            position: absolute !important;
            z-index: 2 !important;
            list-style: none !important;
            list-style-position: initial !important;
            list-style-image: initial !important;
            list-style-type: none !important;
            text-align: left !important;
            padding: 0 !important;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2) !important;
            background-color: white !important;
            border: 1px solid #CCC !important;
            white-space: nowrap !important;
            max-height: 200px !important;
            overflow-y: scroll !important;
            width: 100% !important;
            margin-top: 0.25rem !important;
            margin-left: 0px !important;
            border-radius: 0.375rem !important;
            }

            .intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
            padding-right: 0.75rem !important;
            padding-left: 4.45rem !important;
            margin-left: 0 !important;
            }

            .intl-tel-input.allow-dropdown .selected-flag, .intl-tel-input.separate-dial-code .selected-flag {
            width: 60px !important;
            }

            .intl-tel-input .selected-flag {
            z-index: 1 !important;
            position: relative !important;
            width: 36px !important;
            height: 100% !important;
            padding: 8px !important;
            display: flex !important;
            gap: 7px !important;
            justify-content: center !important;
            align-items: center !important;
            border-top-left-radius: 0.375rem !important;
            border-bottom-left-radius: 0.375rem !important;
            border-right-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-right-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .iti-mobile .intl-tel-input.iti-container {
            top: 55px !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            position: fixed !important;
            margin: 5% !important;
            width: 90% !important;
            }

            .intl-tel-input .country-list .country {
            display: flex !important;
            height: 2.5rem !important;
            align-items: center !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            /*the container must be positioned relative:*/

            .custom-select {
            position: relative !important;
            font-family: Arial !important;
            }

            .custom-select select {
            display: none !important;
            /*hide original SELECT element:*/
            }

            .select-selected {
            background-color: DodgerBlue !important;
            }

            /*style the arrow inside the select element:*/

            .select-selected:after {
            position: absolute !important;
            content: "" !important;
            top: 14px !important;
            right: 10px !important;
            width: 0 !important;
            height: 0 !important;
            border: 6px solid transparent !important;
            border-color: #fff transparent transparent transparent !important;
            }

            /*point the arrow upwards when the select box is open (active):*/

            .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent !important;
            top: 7px !important;
            }

            /*style the items (options), including the selected item:*/

            .select-items div,.select-selected {
            color: #ffffff !important;
            padding: 8px 16px !important;
            border: 1px solid transparent !important;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent !important;
            cursor: pointer !important;
            -webkit-user-select: none !important;
                -moz-user-select: none !important;
                    user-select: none !important;
            }

            /*style items (options):*/

            .select-items {
            position: absolute !important;
            background-color: DodgerBlue !important;
            top: 100% !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 99 !important;
            }

            /*hide the items when the select box is closed:*/

            .select-hide {
            display: none !important;
            }

            .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1) !important;
            }

            .modal{
            margin: 0px !important;
            display: flex !important;
            height: 100% !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            background-color: transparent !important;
            padding: 0px !important;
            }

            .input .modal{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .modal.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.modal.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .modal{
                height: -moz-fit-content !important;
                height: fit-content !important;
            }
            }

            @media (min-width: 768px){
            .modal{
                margin: 1.25rem !important;
            }
            }

            .sticky-nav{
            position: fixed !important;
            top: 0px !important;
            z-index: 20 !important;
            border-bottom-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.sticky-nav.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.sticky-nav.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.sticky-nav.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.sticky-nav.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.sticky-nav.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav div {
            align-items: center !important;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav{
            border-radius: 0.375rem !important;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-nav svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            .modal .absolute.sticky-nav.right-0.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-nav.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .absolute.sticky-nav.right-0.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .absolute.sticky-nav.right-0.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.sticky-nav.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            @media (max-width: 640px) {
            .sticky-nav.inset-0.z-40.overflow-y-auto.p-4 {
                padding: 0 !important;
                background-color: white !important;
                display: block !important;
            }
            }

            .sticky-navback{
            position: sticky !important;
            top: 0px !important;
            z-index: 20 !important;
            border-bottom-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.sticky-navback.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.sticky-navback.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.sticky-navback.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.sticky-navback.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.sticky-navback.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback div {
            align-items: center !important;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback{
            border-radius: 0.375rem !important;
            }

            .p-4.pointer-events-auto.border-l-4.sticky-navback svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            .modal .absolute.sticky-navback.right-0.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.sticky-navback.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .absolute.sticky-navback.right-0.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .absolute.sticky-navback.right-0.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.sticky-navback.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .leftlabel input {
            padding-left: 70px !important;
            }

            .leftlabel select {
            padding-left: 60px !important;
            }

            .input-cntnr {
            margin-bottom: 30px !important;
            }

            .message{
            width: 100% !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .message.sm\:max-w-sm,.message.sm\:max-w-md,.message.sm\:max-w-lg,.message.sm\:max-w-xl,.message.sm\:max-w-2xl,.message.sm\:max-w-3xl,.message.sm\:max-w-4xl,.message.sm\:max-w-5xl,.message.sm\:max-w-6xl,.message.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .message.sm\:max-w-sm > div,.message.sm\:max-w-md > div,.message.sm\:max-w-lg > div,.message.sm\:max-w-xl > div,.message.sm\:max-w-2xl > div,.message.sm\:max-w-3xl > div,.message.sm\:max-w-4xl > div,.message.sm\:max-w-5xl > div,.message.sm\:max-w-6xl > div,.message.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            @media (max-width: 640px) {
            .message.sm\:max-w-sm > div,.message.sm\:max-w-md > div,.message.sm\:max-w-lg > div,.message.sm\:max-w-xl > div,.message.sm\:max-w-2xl > div,.message.sm\:max-w-3xl > div,.message.sm\:max-w-4xl > div,.message.sm\:max-w-5xl > div,.message.sm\:max-w-6xl > div,.message.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .message {
            font-size: .70rem !important;
            line-height: 1.25rem !important;
            }

            .sch-logo .filepond--list {
            left: 0 !important;
            right: 0 !important;
            height: 100% !important;
            width: 100% !important;
            cursor: pointer !important;
            }

            .sch-logo .filepond--item {
            margin: 4% !important;
            height: 92% !important;
            }

            .sch-logo .filepond--root .filepond--list-scroller {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            height: 100% !important;
            width: 100% !important;
            transform: translate3d(0px, 0px, 0px) !important;
            }

            .sch-logo-bg {
            background-size: 0% !important;
            background-position: center !important;
            }

            .sch-logo .filepond--hopper {
            height: 278px !important;
            width: 278px !important;
            background-image: inherit !important;
            background-repeat: no-repeat !important;
            background-size: 0% !important;
            background-position: center !important;
            }

            .sch-logo {
            background-image: inherit !important;
            background-repeat: no-repeat !important;
            background-size: 0% !important;
            background-position: center !important;
            }

            .sch-logo .block {
            background-image: inherit !important;
            background-repeat: no-repeat !important;
            background-size: 0% !important;
            background-position: center !important;
            }

            .sch-logo .filepond--drop-label{
            display: flex !important;
            cursor: pointer !important;
            align-items: flex-end !important;
            justify-content: center !important;
            border-radius: 0.5rem !important;
            padding: 0px !important;
            }

            .input .sch-logo .filepond--drop-label{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.bg-white.sch-logo .filepond--drop-label div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .sch-logo .filepond--drop-label.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.sch-logo .filepond--drop-label.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.sch-logo .filepond--drop-label.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .sch-logo .filepond--drop-label {
            background-image: inherit !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center !important;
            background-color: #0096C7 !important;
            width: 92% !important;
            height: 92% !important;
            margin: 4% !important;
            }

            .sch-logo .filepond--drop-label label{
            width: 100% !important;
            border-bottom-right-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important;
            padding: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm,.sch-logo .filepond--drop-label label.sm\:max-w-md,.sch-logo .filepond--drop-label label.sm\:max-w-lg,.sch-logo .filepond--drop-label label.sm\:max-w-xl,.sch-logo .filepond--drop-label label.sm\:max-w-2xl,.sch-logo .filepond--drop-label label.sm\:max-w-3xl,.sch-logo .filepond--drop-label label.sm\:max-w-4xl,.sch-logo .filepond--drop-label label.sm\:max-w-5xl,.sch-logo .filepond--drop-label label.sm\:max-w-6xl,.sch-logo .filepond--drop-label label.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm > div,.sch-logo .filepond--drop-label label.sm\:max-w-md > div,.sch-logo .filepond--drop-label label.sm\:max-w-lg > div,.sch-logo .filepond--drop-label label.sm\:max-w-xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-2xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-3xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-4xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-5xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-6xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .flex.items-end.sm\:items-center.justify-center.min-h-full.sch-logo .filepond--drop-label label.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md div {
            align-items: center !important;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md{
            border-radius: 0.375rem !important;
            }

            .sch-logo .filepond--drop-label label.pointer-events-auto.border-l-4.shadow-md svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            @media (max-width: 640px) {
            .fixed.inset-0.z-40.overflow-y-auto.sch-logo .filepond--drop-label label {
                padding: 0 !important;
                background-color: white !important;
                display: block !important;
            }

            .sch-logo .filepond--drop-label label.sm\:max-w-sm > div,.sch-logo .filepond--drop-label label.sm\:max-w-md > div,.sch-logo .filepond--drop-label label.sm\:max-w-lg > div,.sch-logo .filepond--drop-label label.sm\:max-w-xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-2xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-3xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-4xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-5xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-6xl > div,.sch-logo .filepond--drop-label label.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .sch-logo .filepond--drop-label label {
            background-color: rgba(0, 0, 0, 0.5) !important;
            }

            .import .filepond--hopper, .sch-logo .filepond--hopper{
            border-radius: 0.375rem !important;
            outline-style: dashed !important;
            outline-width: 1px !important;
            outline-offset: 2px !important;
            outline-color: #d1d5db !important;
            }

            .import .filepond--panel-root, .sch-logo .filepond--panel-root{
            border-style: none !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .import .filepond--drop-label{
            display: flex !important;
            cursor: pointer !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 0.5rem !important;
            }

            .input .import .filepond--drop-label{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.bg-white.import .filepond--drop-label div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.bg-white.import .filepond--drop-label div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.bg-white.import .filepond--drop-label div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.import .filepond--drop-label div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.bg-white.import .filepond--drop-label div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .import .filepond--drop-label.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.import .filepond--drop-label.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .import label, .sch-logo label{
            cursor: pointer !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .import a, .sch-logo a{
            display: none !important;
            }

            button.filepond--file-action-button.filepond--action-remove-item {
            cursor: pointer !important;
            }

            .input .block {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
            }

            .input .flex{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            input, select{
            border-radius: 0.375rem !important;
            border-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            }

            .blue-inpt input:focus, .blue-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .red-inpt input:focus, .red-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .green-inpt input:focus, .green-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .orange-inpt input:focus, .orange-inpt select:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .blue-btn, .blue-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            }

            .blue-btn:focus, .blue-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn:hover, .blue-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn, .green-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            }

            .green-btn:focus, .green-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn:hover, .green-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn, .red-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            }

            .red-btn:focus, .red-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn:hover, .red-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn, .orange-btn-i button{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            }

            .orange-btn:focus, .orange-btn-i button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn:hover, .orange-btn-i button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .squared-btn{
            border-radius: 0.375rem !important;
            padding: 0.5rem !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.squared-btn.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0 !important;
            padding-right: 0 !important;
            }

            .squared-btn-i button{
            border-radius: 0.375rem !important;
            border-width: 2px !important;
            padding: 0.5rem !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.squared-btn-i button.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0 !important;
            padding-right: 0 !important;
            }

            .rounded-btn{
            border-radius: 9999px !important;
            padding: 0.75rem !important;
            padding-left: 3.5rem !important;
            padding-right: 3.5rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .rounded-btn-i button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            padding: 0.75rem !important;
            padding-left: 3.5rem !important;
            padding-right: 3.5rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .squared-btn-i button span, .rounded-btn-i button span{
            font-size: 0.70rem !important;
            font-weight: 300 !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .blue-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .blue-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .blue-btn-i button:hover span{
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .green-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .green-btn-i button:hover span{
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .red-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .red-btn-i button:hover span{
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-i svg{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            @media (min-width: 640px){
            .orange-btn-i button:hover svg{
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-i button:hover span{
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .close-btn, .menu-close-btn{
            position: absolute !important;
            z-index: 10 !important;
            height: 1.25rem !important;
            width: 1.25rem !important;
            cursor: pointer !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 9999px !important;
            padding: 0.75rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .flex.items-end.sm\:items-center.close-btn.min-h-full.p-4.text-center.sm\:p-0,.flex.items-end.sm\:items-center .menu-close-btn.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .modal .close-btn.top-0.right-0.pt-3.pr-3,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button,.input .mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0,.flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1),.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2),.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus,.mt-5.sm\:mt-4.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .close-btn.top-0.right-0.pt-3.pr-3,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .close-btn.top-0.right-0.pt-3.pr-3 svg,.modal  .menu-close-btn.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.blue-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.red-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.green-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:focus,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .close-btn.top-0.right-0.pt-3.pr-3 button:hover svg,.orange-btn-x  .menu-close-btn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .close-btn{
            display: none !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.close-btn-show button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.close-btn-show button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-md > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.close-btn-show button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.close-btn-show button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .close-btn-show{
                display: flex !important;
            }
            }

            .check input{
            --tw-text-opacity: 1 !important;
            color: rgb(0 180 216 / var(--tw-text-opacity)) !important;
            }

            .check label, .check input{
            cursor: pointer !important;
            }

            .no-scroll::-webkit-scrollbar {
            display: none !important;
            }

            .tab::-webkit-scrollbar {
            display: none !important;
            }

            .title-btn::-webkit-scrollbar {
            display: none !important;
            }

            .open {
            transform: scale(100%) !important;
            }

            .open-sb{
            display: flex !important;
            }

            .input .open-sb{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .open-sb.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .close-sb{
            display: flex !important;
            }

            .input .close-sb{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .close-sb.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .sidebar{
            width: 100% !important;
            transition-duration: 500ms !important;
            }

            .sidebar.sm\:max-w-sm,.sidebar.sm\:max-w-md,.sidebar.sm\:max-w-lg,.sidebar.sm\:max-w-xl,.sidebar.sm\:max-w-2xl,.sidebar.sm\:max-w-3xl,.sidebar.sm\:max-w-4xl,.sidebar.sm\:max-w-5xl,.sidebar.sm\:max-w-6xl,.sidebar.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .sidebar.sm\:max-w-sm > div,.sidebar.sm\:max-w-md > div,.sidebar.sm\:max-w-lg > div,.sidebar.sm\:max-w-xl > div,.sidebar.sm\:max-w-2xl > div,.sidebar.sm\:max-w-3xl > div,.sidebar.sm\:max-w-4xl > div,.sidebar.sm\:max-w-5xl > div,.sidebar.sm\:max-w-6xl > div,.sidebar.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            @media (max-width: 640px) {
            .sidebar.sm\:max-w-sm > div,.sidebar.sm\:max-w-md > div,.sidebar.sm\:max-w-lg > div,.sidebar.sm\:max-w-xl > div,.sidebar.sm\:max-w-2xl > div,.sidebar.sm\:max-w-3xl > div,.sidebar.sm\:max-w-4xl > div,.sidebar.sm\:max-w-5xl > div,.sidebar.sm\:max-w-6xl > div,.sidebar.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            @media (min-width: 640px){
            .sidebar{
                width: 18rem !important;
            }
            }

            .sideclose {
            width: 3.53rem !important;
            }

            .sideclose .tab{
            padding-right: 0px !important;
            }

            .sideclose .tabname p{
            opacity: 0 !important;
            transition-property: all !important;
            transition-duration: 300ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .sideclose .prof{
            flex-direction: column !important;
            flex-wrap: wrap !important;
            opacity: 0 !important;
            }

            .sideopen .prof{
            transition-duration: 1000ms !important;
            }

            .menuclose {
            transform: translate(0) !important;
            width: 100% !important;
            border-radius: 0 !important;
            }

            .side-icon {
            text-shadow: -1px 0 #48CAE4, 0 1px #48CAE4, 1px 0 #48CAE4, 0 -1px #48CAE4 !important;
            }

            .sub-sched:hover .side-icon {
            text-shadow: -1px 0 #CAF0F8, 0 1px #CAF0F8, 1px 0 #CAF0F8, 0 -1px #CAF0F8 !important;
            }

            .schedopen{
            height: 12rem !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            }

            .schedopen p, .schedopen span i{
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .schedopen .sched-drop{
            --tw-rotate: -0deg !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            }

            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.schedopen .sched-drop.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.schedopen .sched-drop.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .schedopen .sched-drop i{
            opacity: 1 !important;
            }

            .linked .tablink{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .sched-link .tab{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(202 240 248 / var(--tw-bg-opacity)) !important;
            }

            .sched-link p, .sched-link span i{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .sched-link .side-icon {
            text-shadow: -1px 0 #CAF0F8, 0 1px #CAF0F8, 1px 0 #CAF0F8, 0 -1px #CAF0F8 !important;
            }

            option{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            .animate-spin{
            height: 0.75rem !important;
            width: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            transition-duration: 75ms !important;
            }

            input:-webkit-autofill,
            input:-webkit-autofill:hover, 
            input:-webkit-autofill:focus,
            textarea:-webkit-autofill,
            textarea:-webkit-autofill:hover,
            textarea:-webkit-autofill:focus,
            select:-webkit-autofill,
            select:-webkit-autofill:hover,
            select:-webkit-autofill:focus {
            font-family: 'Tilt Neon', sans-serif !important;
            background-color: white !important;
            -webkit-transition: background 9999s ease-in-out 0s !important;
            transition: background 9999s ease-in-out 0s !important;
            }

            *::-webkit-scrollbar{
            height: 0.5rem !important;
            width: 0.5rem !important;
            -webkit-transition-property: all !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            *::-webkit-scrollbar-track{
            border-radius: 0.375rem !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            -webkit-transition-property: all !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative*.rounded-lg::-webkit-scrollbar-track div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            *::-webkit-scrollbar-thumb{
            border-radius: 9999px !important;
            border-width: 2px !important;
            border-style: solid !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(156 163 175 / var(--tw-bg-opacity)) !important;
            -webkit-transition-property: all !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            *::-webkit-scrollbar-thumb:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(107 114 128 / var(--tw-bg-opacity)) !important;
            }

            ::-webkit-file-upload-button{
            display: none !important;
            }

            .file-h div{
            height: 100% !important;
            }

            .file-h label.block{
            height: 100% !important;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
            margin: 0 !important;
            }

            .w-full.sm\:max-w-sm, 
            .w-full.sm\:max-w-md, 
            .w-full.sm\:max-w-lg, 
            .w-full.sm\:max-w-xl,
            .w-full.sm\:max-w-2xl,
            .w-full.sm\:max-w-3xl,
            .w-full.sm\:max-w-4xl,
            .w-full.sm\:max-w-5xl,
            .w-full.sm\:max-w-6xl,
            .w-full.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .w-full.sm\:max-w-sm > div, 
            .w-full.sm\:max-w-md > div, 
            .w-full.sm\:max-w-lg > div, 
            .w-full.sm\:max-w-xl > div,
            .w-full.sm\:max-w-2xl > div,
            .w-full.sm\:max-w-3xl > div,
            .w-full.sm\:max-w-4xl > div,
            .w-full.sm\:max-w-5xl > div,
            .w-full.sm\:max-w-6xl > div,
            .w-full.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.sm\:flex button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.sm\:flex button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-md > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.sm\:flex button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.sm\:flex button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            #headlessui-portal-root h3{
            border-left-width: 4px !important;
            --tw-border-opacity: 1 !important;
            border-left-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md div {
            align-items: center !important;
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md{
            border-radius: 0.375rem !important;
            }

            .p-4.pointer-events-auto#headlessui-portal-root h3.shadow-md svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            .relative.bg-white.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.bg-white.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.bg-white.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.bg-white.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.bg-white.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .flex.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md div {
            align-items: center !important;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md{
            border-radius: 0.375rem !important;
            }

            .p-4.pointer-events-auto.border-l-4.shadow-md svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            .drop-down {
            position: relative !important;
            outline: none !important;
            }

            select {
            -moz-appearance: none !important;
                appearance: none !important;
            -webkit-appearance: none !important;
            cursor: pointer !important;
            }

            .drop-down .optn{
            position: absolute !important;
            top: 2.75rem !important;
            right: 0px !important;
            z-index: 10 !important;
            max-height: 10rem !important;
            width: 100% !important;
            list-style-type: none !important;
            overflow: auto !important;
            border-radius: 0.375rem !important;
            border-width: 1px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            font-size: 0.70rem !important;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color) !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .drop-down .optn.sm\:max-w-sm,.drop-down .optn.sm\:max-w-md,.drop-down .optn.sm\:max-w-lg,.drop-down .optn.sm\:max-w-xl,.drop-down .optn.sm\:max-w-2xl,.drop-down .optn.sm\:max-w-3xl,.drop-down .optn.sm\:max-w-4xl,.drop-down .optn.sm\:max-w-5xl,.drop-down .optn.sm\:max-w-6xl,.drop-down .optn.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .drop-down .optn.sm\:max-w-sm > div,.drop-down .optn.sm\:max-w-md > div,.drop-down .optn.sm\:max-w-lg > div,.drop-down .optn.sm\:max-w-xl > div,.drop-down .optn.sm\:max-w-2xl > div,.drop-down .optn.sm\:max-w-3xl > div,.drop-down .optn.sm\:max-w-4xl > div,.drop-down .optn.sm\:max-w-5xl > div,.drop-down .optn.sm\:max-w-6xl > div,.drop-down .optn.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .relative.drop-down .optn.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.drop-down .optn.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.drop-down .optn.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.drop-down .optn.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.drop-down .optn.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn div {
            align-items: center !important;
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn{
            border-radius: 0.375rem !important;
            }

            .p-4.pointer-events-auto.border-l-4.drop-down .optn svg:nth-child(1){
            height: 2rem !important;
            width: 2rem !important;
            }

            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .drop-down .optn.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.drop-down .optn.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .drop-down .optn.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .modal .absolute.top-0.drop-down .optn.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .blue-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .drop-down .optn.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .absolute.top-0.drop-down .optn.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            @media (max-width: 640px) {
            .drop-down .optn.sm\:max-w-sm > div,.drop-down .optn.sm\:max-w-md > div,.drop-down .optn.sm\:max-w-lg > div,.drop-down .optn.sm\:max-w-xl > div,.drop-down .optn.sm\:max-w-2xl > div,.drop-down .optn.sm\:max-w-3xl > div,.drop-down .optn.sm\:max-w-4xl > div,.drop-down .optn.sm\:max-w-5xl > div,.drop-down .optn.sm\:max-w-6xl > div,.drop-down .optn.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .drop-down li{
            display: flex !important;
            height: 2.5rem !important;
            cursor: pointer !important;
            align-items: center !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .input .drop-down li{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .drop-down li.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .drop-down li:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            }

            /* .drop-down li:nth-child(1) {
                @apply hidden bg-gray-200 !important;
            } */

            .open-close{
            display: none !important;
            }

            /* #headlessui-portal-root .fixed div:nth-child(1) {
                @apply items-center !important;
            } */

            .blue-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-chck [type='radio']:checked{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            .choices .choices__list--dropdown .choices__item--selectable.is-highlighted{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .is-flipped .choices__list--dropdown, .is-flipped .choices__list[aria-expanded] {
            margin-bottom: 0.25rem !important;
            border-radius: 0.375rem !important;
            }

            .choices .choices__list--dropdown .choices__item--selectable {
            font-size: .70rem !important;
            }

            .choices.is-focused .choices__inner:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .choices .choices__inner{
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            background-size: 1rem 1rem !important;
            display: flex !important;
            align-items: center !important;
            cursor: pointer !important;
            }

            .choices[data-type*=select-multiple] .choices__inner {
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
            border-radius: 0.375rem !important;
            }

            .choices__input{
            display: flex !important;
            align-items: center !important;
            --tw-text-opacity: 1 !important;
            color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            opacity: 1 !important;
            }

            .input .choices__input{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .choices__input.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices .choices__list--multiple .choices__item{
            display: flex !important;
            width: -moz-fit-content !important;
            width: fit-content !important;
            cursor: pointer !important;
            align-items: center !important;
            gap: 0.25rem !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1) !important;
            }

            .input .choices .choices__list--multiple .choices__item{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .choices .choices__list--multiple .choices__item.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices .choices__list--multiple .choices__item:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
            display: flex !important;
            justify-content: center !important;
            gap: 0.75rem !important;
            }

            .input .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2).items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2).min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .relative.choices .choices__list--multiple .choices__item:hover.rounded-lg div:nth-child(2){
                gap: 0.5rem !important;
            }
            }

            .choices[data-type*=select-multiple] .choices__button{
            height: 1.25rem !important;
            width: 1.25rem !important;
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.5rem !important;
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1) !important;
            }

            .choices .choices__list--multiple{
            display: flex !important;
            gap: 0.25rem !important;
            }

            .input .choices .choices__list--multiple{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .choices .choices__list--multiple.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .choices__list--dropdown .choices__item, .choices__list[aria-expanded] .choices__item{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            td{
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            }

            .mobtable tr {
            display: revert !important;
            }

            .mobtable table {
            display: revert !important;
            }

            .mobtable th{
            display: none !important;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
            }

            @media (min-width: 640px){
            .mobtable th{
                display: table-cell !important;
                padding-top: 0.75rem !important;
                padding-bottom: 0.75rem !important;
            }
            }

            .mobtable tbody{
            width: 100% !important;
            }

            .mobtable tbody.sm\:max-w-sm,.mobtable tbody.sm\:max-w-md,.mobtable tbody.sm\:max-w-lg,.mobtable tbody.sm\:max-w-xl,.mobtable tbody.sm\:max-w-2xl,.mobtable tbody.sm\:max-w-3xl,.mobtable tbody.sm\:max-w-4xl,.mobtable tbody.sm\:max-w-5xl,.mobtable tbody.sm\:max-w-6xl,.mobtable tbody.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mobtable tbody.sm\:max-w-sm > div,.mobtable tbody.sm\:max-w-md > div,.mobtable tbody.sm\:max-w-lg > div,.mobtable tbody.sm\:max-w-xl > div,.mobtable tbody.sm\:max-w-2xl > div,.mobtable tbody.sm\:max-w-3xl > div,.mobtable tbody.sm\:max-w-4xl > div,.mobtable tbody.sm\:max-w-5xl > div,.mobtable tbody.sm\:max-w-6xl > div,.mobtable tbody.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            @media (max-width: 640px) {
            .mobtable tbody.sm\:max-w-sm > div,.mobtable tbody.sm\:max-w-md > div,.mobtable tbody.sm\:max-w-lg > div,.mobtable tbody.sm\:max-w-xl > div,.mobtable tbody.sm\:max-w-2xl > div,.mobtable tbody.sm\:max-w-3xl > div,.mobtable tbody.sm\:max-w-4xl > div,.mobtable tbody.sm\:max-w-5xl > div,.mobtable tbody.sm\:max-w-6xl > div,.mobtable tbody.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mobtable td .td{
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            }

            .input .mobtable td .td{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mobtable td .td.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (min-width: 640px){
            .mobtable td .td{
                display: table-cell !important;
            }
            }

            .mobtable .flex-row.sm\:justify-end.mb-3.px-4.sm\:px-0.-mr-2.sm\:-mr-3 {
            padding-left: 0 !important;
            padding-right: 0 !important;
            }

            .mobtable .shadow.relative.sm\:rounded-md.sm\:overflow-hidden {
            border-radius: 0.375rem !important;
            overflow: hidden !important;
            }

            .modal .absolute.top-0.right-0.pt-3.pr-3{
            z-index: 10 !important;
            display: none !important;
            padding-top: 1.25rem !important;
            padding-right: 1.25rem !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button{
            display: flex !important;
            height: 100% !important;
            width: 100% !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 0.75rem !important;
            line-height: 1rem !important;
            text-transform: uppercase !important;
            }

            .input .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button{
            flex-wrap: wrap !important;
            border-width: 0px !important;
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            .flex.items-end.sm\:items-center.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.min-h-full.p-4.text-center.sm\:p-0 {
            align-items: center !important;
            }

            @media (max-width: 640px) {
            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-sm > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-md > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-lg > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-2xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-3xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-4xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-5xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-6xl > div,.mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1){
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(1):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2){
            margin-top: 0px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2):hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .mt-5.sm\:mt-4.modal .absolute.top-0.right-0.pt-3.pr-3 button:nth-child(2):focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .modal .absolute.top-0.right-0.pt-3.pr-3{
                display: flex !important;
            }
            }

            .modal .absolute.top-0.right-0.pt-3.pr-3 svg{
            height: 1rem !important;
            width: 1rem !important;
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 150 199 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(0 150 199 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(0 150 199 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }
            }

            .blue-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(239 68 68 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }
            }

            .red-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(34 197 94 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(34 197 94 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }
            }

            .green-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button{
            border-radius: 9999px !important;
            border-width: 2px !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 115 22 / var(--tw-bg-opacity)) !important;
            padding: 0.25rem !important;
            transition-property: all !important;
            transition-duration: 150ms !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(249 115 22 / var(--tw-border-opacity)) !important;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity)) !important;
            --tw-ring-opacity: 0.2 !important;
            }

            @media (min-width: 640px){
            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
                --tw-text-opacity: 1 !important;
                color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }
            }

            .orange-btn-x .absolute.top-0.right-0.pt-3.pr-3 button:hover svg{
            --tw-text-opacity: 1 !important;
            color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
            }

            @media (max-width: 640px) {
            .mobtable td .td:before {
                content: attr(data-title) ": " !important;
                width: -moz-fit-content !important;
                width: fit-content !important;
                margin-right: 10px !important;
                text-transform: uppercase !important;
            }

            .mobtable table{
                display: flex !important;
            }

            .input .mobtable table{
                flex-wrap: wrap !important;
                border-width: 0px !important;
                --tw-shadow: 0 0 #0000 !important;
                --tw-shadow-colored: 0 0 #0000 !important;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mobtable table.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
                align-items: center !important;
            }

            .mobtable tr{
                display: flex !important;
                width: 100% !important;
                flex-direction: column !important;
            }

            .input .mobtable tr{
                flex-wrap: wrap !important;
                border-width: 0px !important;
                --tw-shadow: 0 0 #0000 !important;
                --tw-shadow-colored: 0 0 #0000 !important;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .mobtable tr.sm\:max-w-sm,.mobtable tr.sm\:max-w-md,.mobtable tr.sm\:max-w-lg,.mobtable tr.sm\:max-w-xl,.mobtable tr.sm\:max-w-2xl,.mobtable tr.sm\:max-w-3xl,.mobtable tr.sm\:max-w-4xl,.mobtable tr.sm\:max-w-5xl,.mobtable tr.sm\:max-w-6xl,.mobtable tr.sm\:max-w-7xl {
                display: flex !important;
                flex-wrap: wrap !important;
                align-items: center !important;
                justify-content: center !important;
                height: 100% !important;
            }

            .mobtable tr.sm\:max-w-sm > div,.mobtable tr.sm\:max-w-md > div,.mobtable tr.sm\:max-w-lg > div,.mobtable tr.sm\:max-w-xl > div,.mobtable tr.sm\:max-w-2xl > div,.mobtable tr.sm\:max-w-3xl > div,.mobtable tr.sm\:max-w-4xl > div,.mobtable tr.sm\:max-w-5xl > div,.mobtable tr.sm\:max-w-6xl > div,.mobtable tr.sm\:max-w-7xl > div {
                display: flex !important;
                flex-wrap: wrap !important;
                align-items: center !important;
                justify-content: center !important;
                width: 100% !important;
                height: 100% !important;
            }

            .mobtable tr.items-end.sm\:items-center.justify-center.min-h-full.p-4.text-center.sm\:p-0 {
                align-items: center !important;
            }

            @media (max-width: 640px) {
                .mobtable tr.sm\:max-w-sm > div,.mobtable tr.sm\:max-w-md > div,.mobtable tr.sm\:max-w-lg > div,.mobtable tr.sm\:max-w-xl > div,.mobtable tr.sm\:max-w-2xl > div,.mobtable tr.sm\:max-w-3xl > div,.mobtable tr.sm\:max-w-4xl > div,.mobtable tr.sm\:max-w-5xl > div,.mobtable tr.sm\:max-w-6xl > div,.mobtable tr.sm\:max-w-7xl > div {
                display: block !important;
                }
            }

            .fixed.inset-0.z-40.overflow-y-auto.p-4 {
                padding: 0 !important;
                background-color: white !important;
                display: block !important;
            }

            .w-full.sm\:max-w-sm > div, 
                .w-full.sm\:max-w-md > div, 
                .w-full.sm\:max-w-lg > div, 
                .w-full.sm\:max-w-xl > div,
                .w-full.sm\:max-w-2xl > div,
                .w-full.sm\:max-w-3xl > div,
                .w-full.sm\:max-w-4xl > div,
                .w-full.sm\:max-w-5xl > div,
                .w-full.sm\:max-w-6xl > div,
                .w-full.sm\:max-w-7xl > div {
                display: block !important;
            }
            }

            .hover\:border-gray-300:hover{
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .hover\:bg-b1:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(202 240 248 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-b5:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-blue-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-gray-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-gray-300:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(209 213 219 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-gray-50:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-green-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-indigo-700:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(67 56 202 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-orange-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 237 213 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-red-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity)) !important;
            }

            .hover\:bg-red-700:hover{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(185 28 28 / var(--tw-bg-opacity)) !important;
            }

            .hover\:text-b6:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-b7:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(0 119 182 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-gray-400:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(156 163 175 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-gray-500:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(107 114 128 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-gray-700:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(55 65 81 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-gray-800:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(31 41 55 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-gray-900:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
            }

            .hover\:text-red-500:hover{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .focus\:z-10:focus{
            z-index: 10 !important;
            }

            .focus\:border-blue-300:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(147 197 253 / var(--tw-border-opacity)) !important;
            }

            .focus\:border-gray-300:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
            }

            .focus\:border-indigo-300:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(165 180 252 / var(--tw-border-opacity)) !important;
            }

            .focus\:border-indigo-500:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(99 102 241 / var(--tw-border-opacity)) !important;
            }

            .focus\:border-indigo-700:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(67 56 202 / var(--tw-border-opacity)) !important;
            }

            .focus\:border-red-700:focus{
            --tw-border-opacity: 1 !important;
            border-color: rgb(185 28 28 / var(--tw-border-opacity)) !important;
            }

            .focus\:bg-gray-100:focus{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity)) !important;
            }

            .focus\:bg-gray-200:focus{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            }

            .focus\:bg-gray-50:focus{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
            }

            .focus\:bg-indigo-100:focus{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity)) !important;
            }

            .focus\:text-gray-500:focus{
            --tw-text-opacity: 1 !important;
            color: rgb(107 114 128 / var(--tw-text-opacity)) !important;
            }

            .focus\:text-gray-800:focus{
            --tw-text-opacity: 1 !important;
            color: rgb(31 41 55 / var(--tw-text-opacity)) !important;
            }

            .focus\:text-indigo-800:focus{
            --tw-text-opacity: 1 !important;
            color: rgb(55 48 163 / var(--tw-text-opacity)) !important;
            }

            .focus\:outline-none:focus{
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            }

            .focus\:ring:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            }

            .focus\:ring-2:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
            }

            .focus\:ring-blue-600:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(37 99 235 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-green-600:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(22 163 74 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-indigo-200:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-indigo-500:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-orange-600:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(234 88 12 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-red-200:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(254 202 202 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-red-500:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-red-600:focus{
            --tw-ring-opacity: 1 !important;
            --tw-ring-color: rgb(220 38 38 / var(--tw-ring-opacity)) !important;
            }

            .focus\:ring-opacity-50:focus{
            --tw-ring-opacity: 0.5 !important;
            }

            .focus\:ring-offset-2:focus{
            --tw-ring-offset-width: 2px !important;
            }

            .focus\:ring-offset-blue-50:focus{
            --tw-ring-offset-color: #eff6ff !important;
            }

            .focus\:ring-offset-green-50:focus{
            --tw-ring-offset-color: #f0fdf4 !important;
            }

            .focus\:ring-offset-orange-50:focus{
            --tw-ring-offset-color: #fff7ed !important;
            }

            .focus\:ring-offset-red-50:focus{
            --tw-ring-offset-color: #fef2f2 !important;
            }

            .active\:bg-gray-100:active{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity)) !important;
            }

            .active\:text-gray-500:active{
            --tw-text-opacity: 1 !important;
            color: rgb(107 114 128 / var(--tw-text-opacity)) !important;
            }

            .active\:text-gray-700:active{
            --tw-text-opacity: 1 !important;
            color: rgb(55 65 81 / var(--tw-text-opacity)) !important;
            }

            .disabled\:cursor-not-allowed:disabled{
            cursor: not-allowed !important;
            }

            .disabled\:bg-gray-50:disabled{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
            }

            .disabled\:opacity-50:disabled{
            opacity: 0.5 !important;
            }

            .group:hover .group-hover\:visible{
            visibility: visible !important;
            }

            .group:hover .group-hover\:w-fit{
            width: -moz-fit-content !important;
            width: fit-content !important;
            }

            .group:hover .group-hover\:bg-white{
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            }

            .group:hover .group-hover\:text-b6{
            --tw-text-opacity: 1 !important;
            color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:text-blue-500{
            --tw-text-opacity: 1 !important;
            color: rgb(59 130 246 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:text-gray-500{
            --tw-text-opacity: 1 !important;
            color: rgb(107 114 128 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:text-green-500{
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:text-red-500{
            --tw-text-opacity: 1 !important;
            color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:text-white{
            --tw-text-opacity: 1 !important;
            color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .group:hover .group-hover\:opacity-100{
            opacity: 1 !important;
            }

            @media (prefers-color-scheme: dark){
            .dark\:bg-gray-900{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity)) !important;
            }
            }

            @media (min-width: 640px){
            .sm\:-right-1{
                right: -0.25rem !important;
            }

            .sm\:right-0{
                right: 0px !important;
            }

            .sm\:order-4{
                order: 4 !important;
            }

            .sm\:order-5{
                order: 5 !important;
            }

            .sm\:order-6{
                order: 6 !important;
            }

            .sm\:-my-px{
                margin-top: -1px !important;
                margin-bottom: -1px !important;
            }

            .sm\:my-8{
                margin-top: 2rem !important;
                margin-bottom: 2rem !important;
            }

            .sm\:-mr-3{
                margin-right: -0.75rem !important;
            }

            .sm\:ml-10{
                margin-left: 2.5rem !important;
            }

            .sm\:ml-3{
                margin-left: 0.75rem !important;
            }

            .sm\:ml-6{
                margin-left: 1.5rem !important;
            }

            .sm\:mr-3{
                margin-right: 0.75rem !important;
            }

            .sm\:mr-5{
                margin-right: 1.25rem !important;
            }

            .sm\:mt-0{
                margin-top: 0px !important;
            }

            .sm\:mt-4{
                margin-top: 1rem !important;
            }

            .sm\:block{
                display: block !important;
            }

            .sm\:inline{
                display: inline !important;
            }

            .sm\:flex{
                display: flex !important;
            }

            .sm\:hidden{
                display: none !important;
            }

            .sm\:h-100{
                height: 30rem !important;
            }

            .sm\:h-fit{
                height: -moz-fit-content !important;
                height: fit-content !important;
            }

            .sm\:w-100{
                width: 30rem !important;
            }

            .sm\:w-80{
                width: 20rem !important;
            }

            .sm\:w-96{
                width: 24rem !important;
            }

            .sm\:w-auto{
                width: auto !important;
            }

            .sm\:w-fit{
                width: -moz-fit-content !important;
                width: fit-content !important;
            }

            .sm\:w-full{
                width: 100% !important;
            }

            .sm\:w-tabw{
                width: 60rem !important;
            }

            .sm\:max-w-lg{
                max-width: 32rem !important;
            }

            .sm\:max-w-md{
                max-width: 28rem !important;
            }

            .sm\:max-w-sm{
                max-width: 24rem !important;
            }

            .sm\:flex-1{
                flex: 1 1 0% !important;
            }

            .sm\:translate-y-0{
                --tw-translate-y: 0px !important;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .sm\:scale-100{
                --tw-scale-x: 1 !important;
                --tw-scale-y: 1 !important;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .sm\:scale-95{
                --tw-scale-x: .95 !important;
                --tw-scale-y: .95 !important;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
            }

            .sm\:flex-nowrap{
                flex-wrap: nowrap !important;
            }

            .sm\:items-start{
                align-items: flex-start !important;
            }

            .sm\:items-end{
                align-items: flex-end !important;
            }

            .sm\:items-center{
                align-items: center !important;
            }

            .sm\:justify-start{
                justify-content: flex-start !important;
            }

            .sm\:justify-end{
                justify-content: flex-end !important;
            }

            .sm\:justify-center{
                justify-content: center !important;
            }

            .sm\:justify-between{
                justify-content: space-between !important;
            }

            .sm\:gap-20{
                gap: 5rem !important;
            }

            .sm\:overflow-hidden{
                overflow: hidden !important;
            }

            .sm\:rounded-lg{
                border-radius: 0.5rem !important;
            }

            .sm\:rounded-md{
                border-radius: 0.375rem !important;
            }

            .sm\:rounded-xl{
                border-radius: 0.75rem !important;
            }

            .sm\:bg-gray-100{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity)) !important;
            }

            .sm\:p-0{
                padding: 0px !important;
            }

            .sm\:p-20{
                padding: 5rem !important;
            }

            .sm\:p-5{
                padding: 1.25rem !important;
            }

            .sm\:p-6{
                padding: 1.5rem !important;
            }

            .sm\:p-8{
                padding: 2rem !important;
            }

            .sm\:px-0{
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            .sm\:px-4{
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .sm\:px-6{
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .sm\:px-px{
                padding-left: 1px !important;
                padding-right: 1px !important;
            }

            .sm\:pl-9{
                padding-left: 2.25rem !important;
            }

            .sm\:pt-0{
                padding-top: 0px !important;
            }

            .sm\:text-left{
                text-align: left !important;
            }

            .sm\:text-2xl{
                font-size: 1.5rem !important;
                line-height: 2rem !important;
            }

            .sm\:text-6xl{
                font-size: 3.75rem !important;
                line-height: 1 !important;
            }

            .sm\:text-base{
                font-size: 1rem !important;
                line-height: 1.5rem !important;
            }

            .sm\:text-lg{
                font-size: 1.125rem !important;
                line-height: 1.75rem !important;
            }

            .sm\:text-sm{
                font-size: 0.875rem !important;
                line-height: 1.25rem !important;
            }

            .sm\:text-xl{
                font-size: 1.25rem !important;
                line-height: 1.75rem !important;
            }

            .sm\:text-blc1{
                --tw-text-opacity: 1 !important;
                color: rgb(48 48 48 / var(--tw-text-opacity)) !important;
            }

            .sm\:text-inherit{
                color: inherit !important;
            }

            .sm\:shadow-md{
                --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
                --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color) !important;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
            }

            .sm\:hover\:bg-b1:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(202 240 248 / var(--tw-bg-opacity)) !important;
            }

            .sm\:hover\:bg-b5:hover{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(0 180 216 / var(--tw-bg-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:bg-white{
                --tw-bg-opacity: 1 !important;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:text-b6{
                --tw-text-opacity: 1 !important;
                color: rgb(0 150 199 / var(--tw-text-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:text-green-500{
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:text-red-500{
                --tw-text-opacity: 1 !important;
                color: rgb(239 68 68 / var(--tw-text-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:text-white{
                --tw-text-opacity: 1 !important;
                color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
            }

            .group:hover .sm\:group-hover\:opacity-100{
                opacity: 1 !important;
            }
            }

            @media (min-width: 768px){
            .md\:flex{
                display: flex !important;
            }

            .md\:hidden{
                display: none !important;
            }

            .md\:max-w-lg{
                max-width: 32rem !important;
            }

            .md\:max-w-xl{
                max-width: 36rem !important;
            }

            .md\:flex-1{
                flex: 1 1 0% !important;
            }

            .md\:items-center{
                align-items: center !important;
            }

            .md\:justify-between{
                justify-content: space-between !important;
            }
            }

            @media (min-width: 1024px){
            .lg\:block{
                display: block !important;
            }

            .lg\:grid{
                display: grid !important;
            }

            .lg\:w-tabw{
                width: 60rem !important;
            }

            .lg\:max-w-2xl{
                max-width: 42rem !important;
            }

            .lg\:max-w-3xl{
                max-width: 48rem !important;
            }

            .lg\:px-8{
                padding-left: 2rem !important;
                padding-right: 2rem !important;
            }
            }

            @media (min-width: 1280px){
            .xl\:w-tabw{
                width: 60rem !important;
            }

            .xl\:max-w-4xl{
                max-width: 56rem !important;
            }

            .xl\:max-w-5xl{
                max-width: 64rem !important;
            }

            .xl\:text-left{
                text-align: left !important;
            }

            .xl\:text-justify{
                text-align: justify !important;
            }
            }

            @media (min-width: 1536px){
            .\32xl\:max-w-6xl{
                max-width: 72rem !important;
            }

            .\32xl\:max-w-7xl{
                max-width: 80rem !important;
            }
            }
        </style>

        <style>
            .bg-blue-100 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(219 234 254 / var(--tw-bg-opacity)) !important;
            }

            @media (min-width: 640px) {
                .sm\:text-lg {
                    font-size: 1.125rem/* 18px */ !important;
                    line-height: 1.75rem/* 28px */ !important;
                }
            }
        </style>
    </head>

    <body class="bg-blue-100 w-full h-full flex items-center justify-center flex-wrap">
        <div class="sm:w-96 h-full flex items-center justify-center flex-wrap sm:p-5 bg-blue-100">
            <div class="w-full h-fit flex items-center justify-center flex-col">
                <div class="shadow-md sm:rounded-xl relative w-full h-fit bg-white">
                    <div class="flex gap-2 items-center justify-center pt-4 flex-wrap">
                        <div class="background-image w-11 h-11" style="background-image: url('{{ asset('image/logo-main.png') }}');">
            
                        </div>
                        <p class="text-blc1 text-sm">
                            AUTO - SCHED
                        </p>
                    </div>
            
                    <div class="pt-4 flex items-center flex-wrap w-full">
                        <div class="bg-b6 w-full p-3 flex items-center justify-center flex-wrap flex-col">
                            <p class="text-white text-sm font-normal uppercase text-center">Welcome</p>
                            <p class="text-white text-xs font-normal uppercase text-center">
                                {{-- {{ $coorFName }} {{ $coorLName }} --}}
                            </p>
                        </div>
            
                        <div class="p-5 w-fit h-fit flex justify-center gap-4 flex-wrap flex-col">
                            <div class="text-justify sm:text-xs text-xs0">
                                <p class="text-justify sm:text-xs text-xs0 text-blc1">
                                    Your Account has been Created. 
                                    You can now Log In your Account by using your <span class="text-b6 sm:text-xs text-xs0">Email Address</span> and <span class="text-red-500 sm:text-xs text-xs0">Password</span>.
                                </p>
                            </div>
                            
                            <div class="text-justify sm:text-xs text-xs0">
                                <p class="text-justify sm:text-xs text-xs0 text-blc1">
                                    Here is your <span class="text-b6 sm:text-xs text-xs0">Email Address</span> and <span class="text-red-500 sm:text-xs text-xs0">Password</span>:
                                </p>
                
                                <p class="flex flex-wrap gap-1 text-blc1">
                                    <span class="sm:text-xs text-xs0">Email Address: </span> <span class="sm:text-xs text-xs0">{{-- $email --}}</span>
                                </p>
                                <p class="flex flex-wrap gap-1 pt-1 text-blc1">
                                    <span class="sm:text-xs text-xs0">Password: </span> <span class="sm:text-xs text-xs0">{{-- $password --}}</span>
                                </p>
                            </div>
                
                            <div class="text-justify sm:text-xs text-xs0">
                                <p class="sm:text-xs text-xs0 text-blc1">
                                    Now, Log In your Account Here:
                                </p>
                                <a href="{{ route('coor.login') }}" target="_blank" rel="noreferrer noopener" class="text-b6 cursor-pointer sm:text-xs text-xs0">
                                    {{ route('coor.login') }}
                                </a>
                            </div>

                            <div class="text-justify sm:text-xs text-xs0">
                                <p class="text-orange-500 sm:text-xs text-xs0">
                                    Note: Please Don't Share this Information to Anyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="w-full flex items-center justify-center flex-col text-xs1 flex-wrap p-4">
                    <p class="text-center w-full text-xs1 text-blc1">
                        This Email was sent to {{-- $email --}} because your Account has been created.
                    </p>
                    <p class="pt-1 text-xs1 text-blc1">
                        © Auto-Sched 2023. All Rights Reserved. 
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>