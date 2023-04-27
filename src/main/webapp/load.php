.mw-cite-backlink,.cite-accessibility-label {
-moz-user-select: none;
-webkit-user-select: none;
-ms-user-select: none;
user-select: none
}

.mw-references-columns {
-webkit-column-width: 30em;
-moz-column-width: 30em;
column-width: 30em;
margin-top: 0.3em
}

.mw-parser-output .mw-references-columns .references {
margin-top: 0
}

.mw-references-columns li {
-webkit-column-break-inside: avoid;
page-break-inside: avoid;
break-inside: avoid-column
}

ol.references {
counter-reset: mw-ref-extends-parent mw-references list-item
}

ol.references > li {
counter-increment: mw-ref-extends-parent mw-references;
counter-reset: mw-ref-extends-child
}

ol.references .mw-extended-references {
list-style: none;
margin-left: 2em
}

.mw-extended-references > li::before {
counter-increment: mw-ref-extends-child;
content: counter(mw-ref-extends-parent,decimal) '.' counter(mw-ref-extends-child,decimal) '. '
}

sup.reference {
unicode-bidi: -moz-isolate;
unicode-bidi: -webkit-isolate;
unicode-bidi: isolate;
white-space: nowrap;
font-weight: normal;
font-style: normal
}

ol.references li:target,sup.reference:target {
background-color: #eaf3ff
}

.mw-ext-cite-error {
font-weight: bold;
unicode-bidi: embed
}

.mw-ext-cite-error code {
background-color: transparent;
color: inherit;
padding: 1px 2px
}

.mw-cite-dir-ltr .reference-text {
direction: ltr;
unicode-bidi: embed
}

.mw-cite-dir-rtl .reference-text {
direction: rtl;
unicode-bidi: embed
}

@media print {
.mw-cite-backlink {
display: none
}
}

#p-lang .uls-settings-trigger {
background: transparent url(/w/extensions/UniversalLanguageSelector/resources/images/cog-sprite.svg?cca73) no-repeat
center top;
border: 0;
min-height: 16px;
min-width: 16px;
float: right;
cursor: pointer
}

#p-lang .uls-settings-trigger::-moz-focus-inner {
border: 0
}

#p-lang .uls-settings-trigger:focus {
outline: 1px solid #36c
}

.skin-vector #p-lang .uls-settings-trigger {
margin-top: 8px
}

#p-lang .uls-settings-trigger:hover {
background-position: center -16px
}

.client-nojs #ca-ve-edit,.ve-not-available #ca-ve-edit,.client-nojs .mw-editsection-divider,.ve-not-available
.mw-editsection-divider,.client-nojs .mw-editsection-visualeditor,.ve-not-available .mw-editsection-visualeditor {
display: none
}

.client-js .mw-content-ltr .mw-editsection-bracket:first-of-type,.client-js .mw-content-rtl
.mw-editsection-bracket:not(:first-of-type) {
margin-right: 0.25em;
color: #54595d
}

.client-js .mw-content-rtl .mw-editsection-bracket:first-of-type,.client-js .mw-content-ltr
.mw-editsection-bracket:not(:first-of-type) {
margin-left: 0.25em;
color: #54595d
}

.badge-goodarticle,.badge-goodlist,.badge-recommendedarticle {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-silver-star.png?70a8c)
}

.badge-featuredarticle,.badge-featuredportal,.badge-featuredlist {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-golden-star.png?ed948)
}

.badge-problematic {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-problematic.png?f3177)
}

.badge-proofread {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-proofread.png?e81f9)
}

.badge-validated {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-validated.png?6232c)
}

.badge-digitaldocument {
list-style-image: url(/w/extensions/WikimediaBadges/resources/images/badge-digitaldocument.png?d1c50)
}

.client-js ol.mw-collapsible::before,.client-js ul.mw-collapsible::before,.client-js .mw-collapsible-toggle-li {
display: list-item;
list-style: none;
margin-bottom: 0.1em
}

.client-js ol.mw-made-collapsible::before,.client-js ul.mw-made-collapsible::before {
display: none
}

.client-js ol.mw-collapsible:not(.mw-made-collapsible):before,.client-js
ul.mw-collapsible:not(.mw-made-collapsible):before,.client-js table.mw-collapsible:not(.mw-made-collapsible)
:first-child tr:first-child th:last-child:before,.client-js table.mw-collapsible:not(.mw-made-collapsible) >
caption:first-child:after,.client-js div.mw-collapsible:not(.mw-made-collapsible):before {
content: '[hide]'
}

.client-js td.mw-collapsed:not(.mw-made-collapsible):before,.client-js table.mw-collapsed:not(.mw-made-collapsible)
:first-child tr:first-child th:last-child:before,.client-js table.mw-collapsed:not(.mw-made-collapsible) >
caption:first-child:after,.client-js div.mw-collapsed:not(.mw-made-collapsible):before {
content: '[show]'
}

.client-js .mw-collapsible[id^='mw-customcollapsible'] th::before,.client-js
.mw-collapsible[id^='mw-customcollapsible']::before {
content: none !important
}

.client-js table.mw-collapsible:not(.mw-made-collapsible) > caption:first-child:after {
float: none;
display: block
}

.client-js .mw-collapsed:not(.mw-made-collapsible) > p,.client-js .mw-collapsed:not(.mw-made-collapsible) >
table,.client-js .mw-collapsed:not(.mw-made-collapsible) > thead + tbody,.client-js
.mw-collapsed:not(.mw-made-collapsible) tr:not(:first-child),.client-js .mw-collapsed:not(.mw-made-collapsible)
.mw-collapsible-content {
display: none
}

.mw-collapsible:not(.mw-made-collapsible)
th:before,.mw-collapsible:not(.mw-made-collapsible):before,.mw-collapsible-toggle {
float: right
}

.mw-content-ltr .mw-collapsible:not(.mw-made-collapsible) th:before,.mw-content-rtl .mw-content-ltr
.mw-collapsible:not(.mw-made-collapsible) th:before,.mw-content-ltr
.mw-collapsible:not(.mw-made-collapsible):before,.mw-content-rtl .mw-content-ltr
.mw-collapsible:not(.mw-made-collapsible):before,.mw-content-ltr .mw-collapsible-toggle,.mw-content-rtl .mw-content-ltr
.mw-collapsible-toggle {
float: right
}

.mw-content-rtl .mw-collapsible:not(.mw-made-collapsible) th:before,.mw-content-ltr .mw-content-rtl
.mw-collapsible:not(.mw-made-collapsible) th:before,.mw-content-rtl
.mw-collapsible:not(.mw-made-collapsible):before,.mw-content-ltr .mw-content-rtl
.mw-collapsible:not(.mw-made-collapsible):before,.mw-content-rtl .mw-collapsible-toggle,.mw-content-ltr .mw-content-rtl
.mw-collapsible-toggle {
float: left
}

li .mw-collapsible-toggle,.mw-content-ltr li .mw-collapsible-toggle,.mw-content-rtl li
.mw-collapsible-toggle,.mw-content-ltr .mw-content-rtl li .mw-collapsible-toggle,.mw-content-rtl .mw-content-ltr li
.mw-collapsible-toggle {
float: none
}

ol.mw-collapsible:not(.mw-made-collapsible):before,ul.mw-collapsible:not(.mw-made-collapsible):before {
float: none !important
}

.mw-ui-button {
background-color: #f8f9fa;
color: #202122;
display: inline-block;
box-sizing: border-box;
margin: 0;
border: 1px solid #a2a9b1;
border-radius: 2px;
cursor: pointer;
vertical-align: middle;
font-family: inherit;
font-size: 1em;
font-weight: bold;
line-height: 1.28571429em;
text-align: center;
-webkit-appearance: none
}

.mw-ui-button:not(.mw-ui-icon-element) {
min-height: 32px;
min-width: 4em;
max-width: 28.75em;
padding: 5px 12px
}

.mw-ui-button:not(:disabled) {
transition-property: background-color,color,border-color,box-shadow;
transition-duration: 100ms
}

.mw-ui-button:not(:disabled):visited {
color: #202122
}

.mw-ui-button:not(:disabled):hover {
background-color: #ffffff;
color: #404244;
border-color: #a2a9b1
}

.mw-ui-button:not(:disabled):focus {
color: #202122;
border-color: #3366cc;
box-shadow: inset 0 0 0 1px #3366cc,inset 0 0 0 2px #ffffff;
outline-width: 0
}

.mw-ui-button:not(:disabled):focus::-moz-focus-inner {
border-color: transparent;
padding: 0
}

.mw-ui-button:not(:disabled):active,.mw-ui-button:not(:disabled).is-on {
background-color: #c8ccd1;
color: #000000;
border-color: #72777d;
box-shadow: none
}

.mw-ui-button:disabled {
background-color: #c8ccd1;
color: #ffffff;
border-color: #c8ccd1;
cursor: default
}

input[type='checkbox']:hover + .mw-ui-button,.mw-ui-button:hover {
background-color: #ffffff;
color: #404244;
border-color: #a2a9b1
}

input[type='checkbox']:focus + .mw-ui-button,.mw-ui-button:focus {
color: #202122;
border-color: #3366cc;
box-shadow: inset 0 0 0 1px #3366cc,inset 0 0 0 2px #ffffff;
outline-width: 0
}

input[type='checkbox']:active + .mw-ui-button,.mw-ui-button:active {
background-color: #c8ccd1;
color: #000000;
border-color: #72777d;
box-shadow: none
}

.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) {
color: transparent !important
}

.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) span:not(.mw-ui-icon) {
display: block;
position: absolute !important;
clip: rect(1px,1px,1px,1px);
width: 1px;
height: 1px;
margin: -1px;
border: 0;
padding: 0;
overflow: hidden
}

@media all and (max-width: 1000px) {
.mw-ui-button.mw-ui-icon-element.mw-ui-icon-with-label-desktop {
color:transparent !important
}

.mw-ui-button.mw-ui-icon-element span:not(.mw-ui-icon) {
display: block;
position: absolute !important;
clip: rect(1px,1px,1px,1px);
width: 1px;
height: 1px;
margin: -1px;
border: 0;
padding: 0;
overflow: hidden
}
}

.mw-ui-button.mw-ui-quiet,.mw-ui-button.mw-ui-quiet.mw-ui-progressive,.mw-ui-button.mw-ui-quiet.mw-ui-destructive {
background-color: transparent;
color: #202122;
border-color: transparent;
font-weight: bold
}

.mw-ui-button.mw-ui-quiet:not(.mw-ui-icon-element),.mw-ui-button.mw-ui-quiet.mw-ui-progressive:not(.mw-ui-icon-element),.mw-ui-button.mw-ui-quiet.mw-ui-destructive:not(.mw-ui-icon-element)
{
min-height: 32px
}

input[type='checkbox']:hover + .mw-ui-button.mw-ui-quiet,input[type='checkbox']:hover +
.mw-ui-button.mw-ui-quiet.mw-ui-progressive,input[type='checkbox']:hover +
.mw-ui-button.mw-ui-quiet.mw-ui-destructive,.mw-ui-button.mw-ui-quiet:hover,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:hover,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:hover
{
background-color: rgba(0,24,73,0.02745098);
color: #202122;
border-color: transparent
}

input[type='checkbox']:focus + .mw-ui-button.mw-ui-quiet,input[type='checkbox']:focus +
.mw-ui-button.mw-ui-quiet.mw-ui-progressive,input[type='checkbox']:focus +
.mw-ui-button.mw-ui-quiet.mw-ui-destructive,.mw-ui-button.mw-ui-quiet:focus,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:focus,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:focus
{
color: #202122;
border-color: #3366cc;
box-shadow: inset 0 0 0 1px #3366cc,inset 0 0 0 2px #ffffff
}

input[type='checkbox']:active + .mw-ui-button.mw-ui-quiet,input[type='checkbox']:active +
.mw-ui-button.mw-ui-quiet.mw-ui-progressive,input[type='checkbox']:active +
.mw-ui-button.mw-ui-quiet.mw-ui-destructive,.mw-ui-button.mw-ui-quiet:active,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:active,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:active
{
background-color: rgba(0,36,73,0.08235294);
color: #000000;
border-color: #72777d;
box-shadow: none
}

.mw-ui-button.mw-ui-quiet:disabled,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled,.mw-ui-button.mw-ui-quiet:disabled:hover,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:hover,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:hover,.mw-ui-button.mw-ui-quiet:disabled:active,.mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:active,.mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:active
{
background-color: transparent;
color: #72777d;
border-color: transparent
}

.mw-ui-button.mw-ui-progressive:not(:disabled) {
background-color: #3366cc;
color: #fff;
border-color: #3366cc
}

.mw-ui-button.mw-ui-progressive:not(:disabled):hover {
background-color: #447ff5;
border-color: #447ff5
}

.mw-ui-button.mw-ui-progressive:not(:disabled):focus {
box-shadow: inset 0 0 0 1px #3366cc,inset 0 0 0 2px #ffffff
}

.mw-ui-button.mw-ui-progressive:not(:disabled):active,.mw-ui-button.mw-ui-progressive:not(:disabled).is-on {
background-color: #2a4b8d;
border-color: #2a4b8d;
box-shadow: none
}

.mw-ui-button.mw-ui-progressive:disabled {
background-color: #c8ccd1;
color: #fff;
border-color: #c8ccd1
}

.mw-ui-button.mw-ui-progressive.mw-ui-quiet {
color: #3366cc;
background-color: transparent;
border-color: transparent
}

input[type='checkbox']:hover +
.mw-ui-button.mw-ui-progressive.mw-ui-quiet,.mw-ui-button.mw-ui-progressive.mw-ui-quiet:hover {
background-color: rgba(52,123,255,0.2);
border-color: transparent;
color: #447ff5
}

input[type='checkbox']:focus +
.mw-ui-button.mw-ui-progressive.mw-ui-quiet,.mw-ui-button.mw-ui-progressive.mw-ui-quiet:focus {
color: #3366cc;
border-color: #3366cc
}

input[type='checkbox']:active +
.mw-ui-button.mw-ui-progressive.mw-ui-quiet,.mw-ui-button.mw-ui-progressive.mw-ui-quiet:active {
color: #ffffff;
background-color: #2a4b8d;
border-color: #2a4b8d
}

.mw-ui-button.mw-ui-destructive:not(:disabled) {
background-color: #dd3333;
color: #fff;
border-color: #dd3333
}

.mw-ui-button.mw-ui-destructive:not(:disabled):hover {
background-color: #ff4242;
border-color: #ff4242
}

.mw-ui-button.mw-ui-destructive:not(:disabled):focus {
box-shadow: inset 0 0 0 1px #dd3333,inset 0 0 0 2px #ffffff
}

.mw-ui-button.mw-ui-destructive:not(:disabled):active,.mw-ui-button.mw-ui-destructive:not(:disabled).is-on {
background-color: #b32424;
border-color: #b32424;
box-shadow: none
}

.mw-ui-button.mw-ui-destructive:disabled {
background-color: #c8ccd1;
color: #fff;
border-color: #c8ccd1
}

.mw-ui-button.mw-ui-destructive.mw-ui-quiet {
color: #dd3333;
background-color: transparent;
border-color: transparent
}

input[type='checkbox']:hover +
.mw-ui-button.mw-ui-destructive.mw-ui-quiet,.mw-ui-button.mw-ui-destructive.mw-ui-quiet:hover {
background-color: rgba(209,29,19,0.2);
border-color: transparent;
color: #ff4242
}

input[type='checkbox']:focus +
.mw-ui-button.mw-ui-destructive.mw-ui-quiet,.mw-ui-button.mw-ui-destructive.mw-ui-quiet:focus {
color: #dd3333;
border-color: #dd3333
}

input[type='checkbox']:active +
.mw-ui-button.mw-ui-destructive.mw-ui-quiet,.mw-ui-button.mw-ui-destructive.mw-ui-quiet:active {
color: #ffffff;
background-color: #b32424;
border-color: #b32424
}

.mw-ui-button.mw-ui-big {
font-size: 1.3em
}

.mw-ui-button.mw-ui-block {
display: block;
width: 100%;
margin-left: auto;
margin-right: auto
}

a.mw-ui-button {
text-decoration: none
}

a.mw-ui-button:hover,a.mw-ui-button:focus {
text-decoration: none
}

.mw-ui-button-group > * {
min-width: 48px;
border-radius: 0;
float: left
}

.mw-ui-button-group > *:first-child {
border-top-left-radius: 2px;
border-bottom-left-radius: 2px
}

.mw-ui-button-group > *:not(:first-child) {
border-left: 0
}

.mw-ui-button-group > *:last-child {
border-top-right-radius: 2px;
border-bottom-right-radius: 2px
}

.mw-ui-button-group .is-on .button {
cursor: default
}

.mw-ui-icon {
font-size: initial;
position: relative;
display: inline-block;
box-sizing: content-box !important;
width: 1.25em;
height: 1.25em;
min-width: 1.25em;
min-height: 1.25em;
flex-basis: 1.25em;
vertical-align: middle;
line-height: 0;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
-moz-appearance: none;
-webkit-appearance: none;
background-color: transparent;
margin: 0;
padding: 0
}

.mw-ui-icon:not(.mw-ui-button) {
border: 0
}

.mw-ui-icon::before {
content: '';
display: block;
width: 100%;
height: 100%;
min-width: 1.25em;
min-height: 1.25em;
background-repeat: no-repeat;
background-size: 1.25em 1.25em;
background-position: center
}

.mw-ui-icon + span:not(:empty) {
margin-left: 6px
}

.mw-ui-icon-flush-top {
margin-top: -0.75em
}

.mw-ui-icon-flush-left {
margin-left: -0.75em
}

@media all and (min-width: 1000px) {
.mw-ui-icon-flush-left {
margin-left:-0.375em
}
}

.mw-ui-icon-flush-right {
margin-right: -0.75em
}

@media all and (min-width: 1000px) {
.mw-ui-icon-flush-right {
margin-right:-0.375em
}
}

.mw-ui-icon-element {
border-radius: 2px;
padding: 0.75em;
line-height: 0;
transition: background-color 100ms;
color: transparent
}

.mw-ui-icon-element.mw-ui-button {
padding: 0.6875em
}

.mw-ui-icon-element:focus,.mw-ui-icon-element:active,.mw-ui-icon-element:visited {
color: transparent
}

@media (min-width: 1000px) {
.mw-ui-icon-element.mw-ui-button {
padding:0.3125em
}
}

.mw-ui-icon-small {
width: 1em;
height: 1em;
min-width: 1em;
min-height: 1em;
flex-basis: 1em;
line-height: 1em
}

.mw-ui-icon-small::before {
content: '';
display: block;
width: 100%;
height: 100%;
min-width: 1em;
min-height: 1em;
background-repeat: no-repeat;
background-size: 1em 1em;
background-position: center
}

.mw-ui-icon-small.mw-ui-icon-element {
padding: 0.4375em
}

.mw-ui-icon-small.mw-ui-icon-flush-left {
margin-left: -0.4375em
}

.mw-ui-icon-small.mw-ui-icon-flush-right {
margin-right: -0.4375em
}

.mw-ui-icon-small.mw-ui-icon-before::before {
min-width: 1em;
min-height: 1em;
margin-right: 0.4375em
}

.mw-ui-icon-before {
width: auto;
max-width: 100%
}

.mw-ui-icon-before::before {
display: inline-block;
font-size: initial;
width: auto;
min-width: 1.25em;
min-height: 1.25em;
margin-right: 6px;
vertical-align: middle
}

.mw-ui-icon-before span {
vertical-align: middle
}

@media all and (min-width: 1000px) {
.mw-ui-icon-with-label-desktop {
color:#54595d !important;
width: auto;
line-height: inherit;
flex-basis: auto;
font-weight: 500 !important
}

.mw-ui-icon-with-label-desktop:hover,.mw-ui-icon-with-label-desktop:focus,.mw-ui-icon-with-label-desktop:active,.mw-ui-icon-with-label-desktop:visited
{
color: #54595d;
text-decoration: none
}

.mw-ui-icon-with-label-desktop::before {
width: auto;
display: inline-block;
margin-right: 6px;
vertical-align: text-bottom
}
}

.mw-ui-icon-wikimedia-labFlask:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=labFlask&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-labFlask-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=labFlask&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-language:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=language&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-language-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=language&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-sandbox:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=sandbox&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-sandbox-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=sandbox&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-listBullet:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=listBullet&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-listBullet-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=listBullet&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-close:before {
background-image: url(/w/load.php?modules=skins.vector.icons&image=close&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-close-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=close&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-ellipsis:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=ellipsis&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-ellipsis-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=ellipsis&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-heart:before {
background-image: url(/w/load.php?modules=skins.vector.icons&image=heart&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-heart-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=heart&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-logIn:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=logIn&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-logIn-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=logIn&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-logOut:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=logOut&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-logOut-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=logOut&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-search:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=search&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-search-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=search&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-settings:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=settings&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-settings-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=settings&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-menu:before {
background-image: url(/w/load.php?modules=skins.vector.icons&image=menu&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-menu-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=menu&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-imageGallery:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=imageGallery&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-imageGallery-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=imageGallery&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-unStar:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=unStar&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-unStar-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=unStar&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-expand:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=expand&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-expand-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=expand&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAdd:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAdd&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAdd-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAdd&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAnonymous:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAnonymous&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAnonymous-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAnonymous&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAvatar:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAvatar&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userAvatar-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userAvatar&variant=progressive&format=original&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userContributions:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userContributions&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userContributions-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userContributions&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userGroup:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userGroup&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userGroup-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userGroup&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userTalk:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userTalk&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-userTalk-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=userTalk&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-watchlist:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=watchlist&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

.mw-ui-icon-wikimedia-watchlist-progressive:before {
background-image:
url(/w/load.php?modules=skins.vector.icons&image=watchlist&variant=progressive&format=original&lang=en&skin=vector-2022&version=8ybr4)
}

@media (prefers-reduced-motion:reduce) {
*,::before,::after {
animation-delay: -0.01ms !important;
animation-duration: 0.01ms !important;
animation-iteration-count: 1 !important;
scroll-behavior: auto !important;
transition-duration: 0ms !important
}
}

body {
margin: 0
}

main {
display: block
}

hr {
box-sizing: content-box;
height: 0;
overflow: visible
}

abbr[title] {
border-bottom: 1px dotted;
cursor: help
}

@supports (text-decoration: underline dotted) {
abbr[title] {
border-bottom:0;
text-decoration: underline dotted
}
}

pre,code,tt,kbd,samp {
font-family: monospace,monospace
}

sub,sup {
line-height: 1
}

img {
border: 0
}

button,input,optgroup,select,textarea {
margin: 0
}

button::-moz-focus-inner,[type='button']::-moz-focus-inner,[type='reset']::-moz-focus-inner,[type='submit']::-moz-focus-inner
{
border-style: none;
padding: 0
}

legend {
color: inherit;
padding: 0
}

div.tright,div.floatright,table.floatright {
clear: right;
float: right
}

div.tleft,div.floatleft,table.floatleft {
float: left;
clear: left
}

div.floatright,table.floatright {
margin: 0 0 0.5em 0.5em
}

div.floatleft,table.floatleft {
margin: 0 0.5em 0.5em 0
}

div.thumb {
width: auto;
background-color: transparent;
margin-bottom: 0.5em
}

div.tleft {
margin: 0.5em 1.4em 1.3em 0
}

div.tright {
margin: 0.5em 0 1.3em 1.4em
}

.thumbcaption {
text-align: left;
line-height: 1.4em;
padding: 3px
}

.thumbcaption:empty {
padding: 0
}

div.thumbinner {
padding: 3px;
text-align: center;
overflow: hidden
}

.mw-message-box {
background-color: #eaecf0;
color: #000000;
box-sizing: border-box;
margin-bottom: 16px;
border: 1px solid #a2a9b1;
padding: 12px 24px;
word-wrap: break-word;
overflow-wrap: break-word;
overflow: hidden
}

.mw-message-box > :only-child {
margin: 0
}

.mw-message-box h2 {
color: inherit;
display: block;
border: 0;
font-size: 1em;
font-weight: bold
}

.mw-message-box .mw-logevent-loglines li {
font-size: 90%
}

.mw-message-box-error {
background-color: #fee7e6;
border-color: #dd3333
}

.mw-message-box-warning {
background-color: #fef6e7;
border-color: #edab00
}

.mw-message-box-success {
background-color: #d5fdf4;
border-color: #14866d
}

@media screen {
html,body {
height: 100%
}

:focus {
outline-color: #3366cc
}

html {
font-size: 100%
}

html,body {
font-family: sans-serif
}

ul {
list-style-image: url(/w/skins/Vector/resources/common/images/bullet-icon.svg?d4515)
}

pre,.mw-code {
line-height: 1.3
}

.mw-jump-link:not(:focus) {
display: block;
position: absolute !important;
clip: rect(1px,1px,1px,1px);
width: 1px;
height: 1px;
margin: -1px;
border: 0;
padding: 0;
overflow: hidden;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none
}

.mw-editsection,.mw-editsection-like {
font-family: sans-serif
}

.mw-body h1,.mw-body-content h1,.mw-body-content h2 {
margin-bottom: 0.25em;
padding: 0;
font-family: 'Linux Libertine','Georgia','Times',serif;
line-height: 1.375
}

.mw-body h1:lang(ja),.mw-body-content h1:lang(ja),.mw-body-content h2:lang(ja),.mw-body h1:lang(he),.mw-body-content
h1:lang(he),.mw-body-content h2:lang(he),.mw-body h1:lang(ko),.mw-body-content h1:lang(ko),.mw-body-content h2:lang(ko)
{
font-family: sans-serif
}

.mw-body h1:lang(ckb),.mw-body-content h1:lang(ckb),.mw-body-content h2:lang(ckb) {
font-family: 'Scheherazade','Linux Libertine','Georgia','Times',serif
}

.mw-body h1:lang(my),.mw-body-content h1:lang(my),.mw-body-content h2:lang(my) {
line-height: normal
}

.mw-body h1,.mw-body-content h1 {
font-size: 1.8em
}

.vector-body {
font-size: 0.875em;
font-size: calc(1em * 0.875);
line-height: 1.6
}

.vector-body #siteSub {
font-size: 12.8px
}

.vector-body h1 {
margin-top: 1em
}

.vector-body h2 {
margin-top: 1em;
font-size: 1.5em
}

.vector-body h3,.vector-body h4,.vector-body h5,.vector-body h6 {
margin-top: 0.3em;
margin-bottom: 0;
padding-bottom: 0;
line-height: 1.6
}

.vector-body h3 {
font-size: 1.2em
}

.vector-body h3,.vector-body h4 {
font-weight: bold
}

.vector-body h4,.vector-body h5,.vector-body h6 {
font-size: 100%
}

.vector-body .toc h2 {
font-family: sans-serif;
font-size: 100%
}

.vector-body p {
margin: 0.5em 0
}

.vector-body blockquote {
border-left: 4px solid #eaecf0;
padding: 8px 32px
}

.vector-body blockquote > :first-child {
margin-top: 0
}

.vector-body blockquote > :last-child {
margin-bottom: 0
}

.mw-parser-output a {
word-wrap: break-word
}

.mw-parser-output a.external {
background-image: url(/w/skins/Vector/resources/common/images/link-external-small-ltr-progressive.svg?30a3a);
background-position: center right;
background-repeat: no-repeat;
background-size: 0.857em;
padding-right: 1em
}

.mw-parser-output a.external.free {
word-break: break-all
}

.mw-indicators {
font-size: 0.875em;
line-height: 1.6;
position: relative;
float: right
}

.mw-indicator {
display: inline-block
}

#localNotice {
margin-bottom: 0.9em
}

#siteNotice {
font-size: 0.8em;
margin: 24px 0;
position: relative;
text-align: center
}

.vector-menu-dropdown {
position: relative
}

.vector-menu-dropdown > .vector-menu-content {
position: absolute;
top: 100%;
left: -1px;
opacity: 0;
height: 0;
visibility: hidden;
overflow: hidden;
margin: 0;
padding: 0;
z-index: 3
}

.vector-menu-dropdown > .vector-menu-content-list {
list-style: none
}

.vector-menu-dropdown .mw-list-item {
padding: 0;
margin: 0
}

.vector-menu-dropdown .mw-list-item a {
cursor: pointer
}

.vector-menu-dropdown .selected a,.vector-menu-dropdown .selected a:visited {
color: #202122;
text-decoration: none
}

.vector-menu-checkbox {
cursor: pointer;
position: absolute;
top: 0;
left: 0;
z-index: 1;
opacity: 0;
width: 100%;
height: 100%;
margin: 0;
padding: 0;
display: none
}

.vector-menu-checkbox:checked ~ .vector-menu-content {
opacity: 1;
visibility: visible;
height: auto
}

:not(:checked) > .vector-menu-checkbox {
display: block
}

.vector-menu-checkbox:focus + .vector-menu-heading {
outline: dotted 1px;
outline: auto -webkit-focus-ring-color
}

.vector-search-box-inner {
position: relative;
height: 100%
}

.vector-search-box-input {
background-color: rgba(255,255,255,0.5);
color: #000000;
width: 100%;
height: 2.15384615em;
box-sizing: border-box;
border: 1px solid #a2a9b1;
border-radius: 2px;
padding: 5px 2.15384615em 5px 0.4em;
box-shadow: inset 0 0 0 1px transparent;
font-family: inherit;
font-size: 0.8125em;
direction: ltr;
transition-property: border-color,box-shadow;
transition-duration: 250ms;
-webkit-appearance: none;
-moz-appearance: textfield
}

.vector-search-box-inner:hover .vector-search-box-input {
border-color: #72777d
}

.vector-search-box-input:focus,.vector-search-box-inner:hover .vector-search-box-input:focus {
outline: 0;
border-color: #3366cc;
box-shadow: inset 0 0 0 1px #3366cc
}

.vector-search-box-input::-webkit-input-placeholder {
color: #72777d;
opacity: 1
}

.vector-search-box-input:-ms-input-placeholder {
color: #72777d;
opacity: 1
}

.vector-search-box-input::-moz-placeholder {
color: #72777d;
opacity: 1
}

.vector-search-box-input::placeholder {
color: #72777d;
opacity: 1
}

.vector-search-box-input::-webkit-search-decoration,.vector-search-box-input::-webkit-search-cancel-button,.vector-search-box-input::-webkit-search-results-button,.vector-search-box-input::-webkit-search-results-decoration
{
display: none
}

.searchButton {
background-color: transparent;
position: absolute;
top: 1px;
bottom: 1px;
right: 1px;
min-width: 28px;
width: 2.15384615em;
border: 0;
padding: 0;
cursor: pointer;
font-size: 0.8125em;
direction: ltr;
text-indent: -99999px;
white-space: nowrap;
overflow: hidden;
z-index: 1
}

.searchButton[name='go'] {
background: no-repeat center / 1.23076923em url(/w/skins/Vector/resources/common/images/search.svg?ac00d);
opacity: 0.67
}

.search-toggle {
display: block;
float: right
}

.vector-search-box-collapses > div {
display: none
}

#p-logo {
width: 10em;
height: 160px;
margin-bottom: 1em
}

#p-logo a {
background-position: center center;
background-repeat: no-repeat;
display: block;
width: 10em;
height: 160px;
text-decoration: none
}

.mw-footer {
direction: ltr
}

.mw-footer ul {
list-style: none;
margin: 0;
padding: 0
}

.mw-footer li {
color: #202122;
margin: 0;
padding: 0.5em 0;
font-size: 0.75em
}

#footer-icons {
float: right
}

#footer-icons li {
float: left;
margin-left: 0.5em;
line-height: 2;
text-align: right
}

#footer-info li {
line-height: 1.4
}

#footer-places li {
float: left;
margin-right: 1em;
line-height: 2
}
}

@media screen and (min-width: 1000px) {
.search-toggle {
display:none
}
}

@media screen and (min-width: 1000px) {
.vector-search-box-collapses > div {
display:block
}
}

@media print {
.toc,body {
padding: 10px;
font-family: 'Linux Libertine','Georgia','Times',serif
}

.printfooter,.mw-footer,.thumb,figure,table,ol,dl,ul,h3,h4,h5,h6 {
font-family: sans-serif
}

img {
font-family: 'Linux Libertine','Georgia','Times',serif
}

.mw-body a:not(.image) {
border-bottom: 1px solid #aaa
}

.firstHeading {
font-size: 25pt;
line-height: 28pt;
margin-bottom: 20px;
padding-bottom: 5px
}

.firstHeading,h2 {
overflow: hidden;
border-bottom: 2px solid #000000
}

h3,h4,h5,h6 {
margin: 30px 0 0
}

h2,h3,h4,h5,h6 {
padding: 0;
position: relative
}

h2 {
font-size: 18pt;
line-height: 24pt;
margin-bottom: 0.25em
}

h3 {
font-size: 14pt;
line-height: 20pt
}

h4,h5,h6 {
font-size: 12pt;
line-height: 16pt
}

p {
font-size: 12pt;
line-height: 16pt;
margin-top: 5px;
text-align: justify
}

p::before {
content: '';
display: block;
width: 120pt;
overflow: hidden
}

blockquote {
border-left: 2px solid #000000;
padding-left: 20px
}

ol,ul {
margin: 10px 0 0 1.6em;
padding: 0
}

ol li,ul li {
padding: 2px 0;
font-size: 12pt
}

table ol li,table ul li {
font-size: inherit
}

.toc {
page-break-before: avoid;
page-break-after: avoid;
background: none;
border: 0;
display: table
}

.toc a {
border: 0;
font-weight: normal
}

.toc > ul > li {
margin-bottom: 4px;
font-weight: bold
}

.toc ul {
margin: 0;
list-style: none
}

.toc ul ul {
padding-left: 30px
}

.toc li.toclevel-1 > a {
font-size: 12pt;
font-weight: bold
}

#mw-navigation,.noprint,.mw-jump-link,.mw-portlet-lang,.toc .tocnumber {
display: none
}

.printfooter {
margin-top: 10px;
border-top: 3px solid #000000;
padding-top: 10px;
font-size: 10pt;
clear: both
}

.mw-footer {
margin-top: 12px;
border-top: 1px solid #eeeeee;
padding-top: 5px
}

#footer-info {
margin: 0;
padding: 0
}

#footer-info li {
color: #999;
list-style: none;
display: block;
padding-bottom: 10px;
font-size: 10pt
}

#footer-info li a {
color: #999 !important
}

#footer-info-lastmod {
color: #000000;
font-size: 12pt;
font-weight: bold
}
}

@media screen {
html {
scroll-padding-top: 75px
}

body {
background-color: #f8f9fa;
color: #202122;
overflow-y: scroll
}

.mw-body,.parsoid-body {
direction: ltr
}

.mw-body {
padding: 0.5em 0 1.5em
}

.mw-body .firstHeading {
word-wrap: break-word;
margin-bottom: 0
}

.mw-header {
position: relative;
z-index: 4
}

#mw-content-text {
margin-top: 16px
}

.mw-body,#mw-data-after-content,.mw-footer {
margin-left: 0
}

.mw-indicators {
z-index: 1
}

.vector-page-titlebar::after {
clear: both;
content: '';
display: block
}

.vector-body-before-content {
overflow: hidden
}

.mw-body .mw-portlet-lang {
float: right
}

.vector-body {
position: relative;
z-index: 0
}

#siteSub {
display: none;
margin-top: 8px
}

#contentSub:not(:empty),#contentSub2 {
font-size: 84%;
line-height: 1.2em;
color: #54595d;
width: auto;
margin: 8px 0 0
}

.parsoid-body {
padding: 0.5em 0 1.5em
}

.mw-page-container {
position: relative;
z-index: 0;
min-height: 100%;
max-width: 99.75em;
min-width: 31.25em;
margin: 0 auto;
padding: 0.05px 1.5em;
background-color: #ffffff;
box-sizing: border-box
}

.vector-feature-limited-width-disabled .mw-page-container {
max-width: none
}

.skin--responsive .mw-page-container {
min-width: auto
}

.vector-header-container .mw-header,.vector-header-container .vector-sticky-header {
width: 100%;
min-height: 3.125rem
}

.vector-feature-zebra-design-disabled .vector-header-container {
max-width: 99.75em;
min-width: 31.25em;
margin: 0 auto;
padding: 0.05px 1.5em;
background-color: #ffffff;
box-sizing: border-box
}

.vector-feature-limited-width-disabled.vector-feature-zebra-design-disabled .vector-header-container {
max-width: none
}

.vector-feature-zebra-design-disabled .vector-sticky-header-container {
border-bottom: 1px solid #eaecf0
}

.vector-feature-zebra-design-enabled .vector-header-container {
width: 100%;
display: flex;
justify-content: center;
background-color: #ffffff;
border-bottom: 1px solid #eaecf0
}

.vector-feature-zebra-design-enabled .vector-header-container .mw-header,.vector-feature-zebra-design-enabled
.vector-header-container .vector-sticky-header {
max-width: 99.75em;
padding-left: 1.5em;
padding-right: 1.5em;
box-sizing: border-box
}

.vector-feature-zebra-design-enabled.vector-feature-limited-width-disabled .vector-header-container
.mw-header,.vector-feature-zebra-design-enabled.vector-feature-limited-width-disabled .vector-header-container
.vector-sticky-header {
max-width: none
}

.vector-feature-limited-width-disabled .mw-content-container,.vector-feature-limited-width-disabled
.mw-table-of-contents-container,.vector-feature-limited-width-content-disabled
.mw-content-container,.vector-feature-limited-width-content-disabled .mw-table-of-contents-container {
max-width: none !important;
width: 100% !important
}

.vector-feature-main-menu-pinned-disabled .vector-sidebar-container-no-toc ~
.mw-content-container,.vector-feature-main-menu-pinned-disabled.vector-feature-toc-pinned-disabled .mw-content-container
{
grid-column: mainMenu / pageContent;
margin-left: auto;
margin-right: auto
}

.mixin-vector-legacy-menu-heading-arrow {
content: '';
background: url(/w/skins/Vector/resources/common/images/arrow-down.svg?9426f) 100% 50% no-repeat;
width: 1.23076923em;
height: 1.23076923em
}

.mw-table-of-contents-container {
align-self: start;
height: 100%
}

#vector-toc-collapsed-button,.vector-sticky-header-toc,.vector-page-titlebar-toc {
display: none;
margin-right: 8px
}

.mixin-toc-below-page-title {
position: fixed;
top: 12px;
left: 12px;
margin: 0;
z-index: 3
}

.client-nojs.vector-feature-toc-pinned-disabled .vector-page-titlebar-toc {
display: block
}

.client-nojs.vector-feature-toc-pinned-disabled .vector-page-titlebar-toc > .vector-menu-content {
max-width: none
}

.client-nojs.vector-feature-toc-pinned-disabled .vector-page-titlebar-toc .vector-toc {
width: max-content;
min-width: 200px;
max-width: min(0.85 * 60em,75vw)
}

.client-nojs.vector-feature-toc-pinned-disabled .vector-page-titlebar-toc .vector-toc .vector-pinnable-header {
padding-left: 36px
}

.client-nojs.vector-feature-toc-pinned-disabled .vector-page-titlebar-toc .vector-toc .vector-toc-contents {
padding-right: 14px;
padding-left: 36px
}

.search-form__loader::after {
content: attr(data-loading-msg);
display: flex;
flex-direction: column;
justify-content: center;
position: absolute;
top: 100%;
width: 100%;
height: calc(40px + 2*8px + 1px);
box-sizing: border-box;
border: 1px solid #a2a9b1;
border-top-width: 0;
border-radius: 0 0 2px 2px;
box-shadow: inset 0 0 0 1px transparent;
padding-left: 36px;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
z-index: 1;
background: linear-gradient(90deg,#3366cc 0%,#3366cc 100%) -10% 0 / 0 2px no-repeat,#ffffff;
animation: search-loader-progress-bar 1200ms linear 500ms infinite alternate
}

.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .search-form__loader::after {
margin-left: 24px;
width: calc(100% - 24px)
}

@keyframes search-loader-progress-bar {
0% {
background-size: 0 2px;
background-position: -10% 0
}

30% {
background-size: 30% 2px;
background-position: -10% 0
}

70% {
background-size: 30% 2px;
background-position: 110% 0
}

100% {
background-size: 0 2px;
background-position: 110% 0
}
}

.vector-search-box {
font-size: 0.875em;
font-size: calc(1em * 0.875);
flex-grow: 1
}

.vector-search-box > div {
max-width: 35.71428571em
}

.vector-search-box-vue .vector-search-box-input,.vector-search-box-vue .searchButton {
font-size: inherit
}

.vector-search-box-vue .vector-search-box-input {
height: auto;
min-height: 32px;
line-height: 1.4285714;
padding-top: 4px;
padding-bottom: 4px
}

.vector-search-box-vue .searchButton {
background-size: 20px auto
}

.client-js .vector-search-box-vue .vector-typeahead-search .cdx-search-input__end-button {
opacity: 0;
transition: opacity 250ms
}

.client-js .vector-search-box-vue .vector-typeahead-search .cdx-search-input__end-button:focus {
opacity: 1
}

.client-js .vector-search-box-vue .vector-typeahead-search .cdx-text-input__input:not(:hover):not(:focus) {
border-right-color: transparent
}

.client-js .vector-search-box-vue .vector-typeahead-search--active .cdx-search-input__end-button,.client-js
.vector-search-box-vue .vector-typeahead-search:hover .cdx-search-input__end-button {
opacity: 1
}

.client-js .vector-search-box-vue .vector-typeahead-search--active .cdx-text-input,.client-js .vector-search-box-vue
.vector-typeahead-search:hover .cdx-text-input {
z-index: 1
}

.client-js .vector-search-box-vue .vector-typeahead-search--active .cdx-text-input__input,.client-js
.vector-search-box-vue .vector-typeahead-search:hover .cdx-text-input__input {
border-top-right-radius: 0;
border-bottom-right-radius: 0
}

.client-js .vector-search-box-vue .vector-typeahead-search .cdx-menu-item {
margin-bottom: 0
}

.client-js .vector-search-box-vue .vector-typeahead-search .cdx-menu-item a {
text-decoration: none
}

.client-js .vector-search-box-vue .vector-typeahead-search.vector-search-box-disable-transitions
.cdx-text-input__input:enabled,.client-js .vector-search-box-vue
.vector-typeahead-search.vector-search-box-disable-transitions .cdx-text-input__start-icon {
transition: none
}

.client-js .vector-search-box-vue .vector-search-box-input {
padding-left: 36px;
padding-right: 8px
}

.client-js .vector-search-box-vue .searchButton {
pointer-events: none;
right: auto;
top: 0;
bottom: 0;
left: 1px;
width: 36px;
opacity: 0.51;
background-size: 1.42857143em auto;
background-position-x: 8px
}

.client-js .vector-search-box-vue .vector-search-box-input:focus ~ .searchButton {
opacity: 0.87
}

.client-js .vector-search-box-vue.vector-search-box-show-thumbnail > div {
max-width: 37.42857143em
}

.client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .searchButton {
left: 25px
}

.client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width
.vector-search-box-input {
margin-left: 24px;
width: calc(100% - 24px)
}

.vector-page-titlebar .mw-portlet-lang {
margin-top: 2px;
box-sizing: border-box;
height: 2em;
flex-shrink: 0
}

.client-nojs .vector-page-titlebar .mw-portlet-lang .mw-portlet-lang-heading-0 {
display: none
}

.vector-page-titlebar .mw-portlet-lang .vector-menu-heading {
user-select: none;
opacity: 1
}

.vector-page-titlebar .mw-portlet-lang .vector-menu-heading .vector-menu-heading-label {
font-size: 0.875em
}

.vector-page-titlebar .mw-portlet-lang .vector-menu-heading.mw-ui-progressive.mw-ui-quiet .mw-ui-icon::before {
opacity: 1
}

.vector-page-titlebar .mw-portlet-lang .vector-menu-heading.mw-ui-progressive.mw-ui-quiet::after {
background-image: url(/w/skins/Vector/resources/common/images/arrow-down-progressive.svg?f0b59);
opacity: 1
}

.vector-page-titlebar .mw-portlet-lang input:active + .vector-menu-heading.mw-ui-progressive.mw-ui-quiet .mw-ui-icon {
filter: brightness(0) invert(1)
}

.vector-page-titlebar .mw-portlet-lang input:active + .vector-menu-heading.mw-ui-progressive.mw-ui-quiet::after {
background-image: url(/w/skins/Vector/resources/common/images/arrow-down-invert.svg?e24ea)
}

.vector-page-titlebar .mw-portlet-lang > .vector-menu-content {
top: auto;
left: -1px;
right: -1px;
box-sizing: border-box;
max-height: 65vh;
overflow: auto;
display: none
}

.vector-page-titlebar .mw-portlet-lang > .vector-menu-content li a {
font-size: inherit
}

.vector-page-titlebar .mw-portlet-lang .vector-menu-checkbox:checked ~ .vector-menu-content {
display: block
}

.vector-page-titlebar .mw-portlet-lang .after-portlet {
margin-top: 10px
}

.vector-page-titlebar .mw-portlet-lang .mw-portlet-lang-heading-empty + .vector-menu-content {
left: auto;
right: 0;
min-width: 300px
}

.vector-page-titlebar .mw-portlet-lang .mw-portlet-lang-heading-empty + .vector-menu-content
.mw-portlet-empty-language-selector-body {
padding: 20px;
border-bottom: solid 1px #c8ccd1;
color: #54595d
}

#p-lang-btn.mw-portlet-empty {
display: none
}

.mw-interlanguage-selector {
display: flex
}

.mw-interlanguage-selector::after {
content: '';
background: url(/w/skins/Vector/resources/common/images/arrow-down.svg?9426f) 100% 50% no-repeat;
width: 1.23076923em;
height: 1.23076923em;
margin-left: -1px
}

.vector-dropdown > .vector-menu-heading.mw-portlet-lang-heading-0 {
display: none
}

.client-js .action-view .vector-dropdown > .vector-menu-heading.mw-portlet-lang-heading-0 {
display: flex
}

.vector-user-links {
display: flex;
align-items: center;
position: relative;
justify-content: flex-end;
flex-shrink: 1
}

.vector-user-links .mw-ui-button {
display: flex;
align-items: center
}

.vector-user-links .mw-list-item {
margin: 0
}

.vector-user-menu .vector-menu-content {
left: auto;
right: 0
}

.vector-user-links .mw-portlet-vector-user-menu-overflow {
font-size: 0.875em
}

.vector-user-links .mw-portlet-vector-user-menu-overflow .vector-menu-content-list {
display: flex;
align-items: center
}

.vector-user-links .mw-portlet-vector-user-menu-overflow a:not(.mw-ui-button):not(.mw-echo-notifications-badge) {
margin: 0 8px
}

.vector-user-menu-logged-in .vector-menu-heading::after {
content: '';
background: url(/w/skins/Vector/resources/common/images/arrow-down.svg?9426f) 100% 50% no-repeat;
width: 1.23076923em;
height: 1.23076923em;
margin-left: -1px
}

#p-user-menu-anon-editor .vector-menu-heading {
display: block
}

#p-user-menu-anon-editor .vector-menu-heading a::before {
content: '('
}

#p-user-menu-anon-editor .vector-menu-heading a::after {
content: ')'
}

#pt-userpage-2 {
max-width: 11.07142857em
}

#pt-userpage-2 a:not(.mw-selflink) {
color: #3366cc
}

#pt-userpage-2 span {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap
}

.mw-header {
display: flex;
flex-wrap: nowrap;
align-items: center;
padding-top: 8px;
padding-bottom: 8px
}

.mw-header .vector-header-start,.mw-header .vector-header-end {
display: flex;
align-items: center
}

.mw-header .vector-header-end {
flex-grow: 1
}

.mw-footer {
border-top: 1px solid #a2a9b1;
padding: 0.75em 0
}

.mw-footer-container {
padding-top: 50px;
padding-bottom: 82px
}

.vector-menu ul {
list-style: none;
margin: 0
}

.vector-dropdown > .vector-menu-heading:not(.mw-ui-icon-element) {
display: flex
}

.vector-dropdown > .vector-menu-heading:not(.mw-ui-icon-element)::after {
content: '';
background: url(/w/skins/Vector/resources/common/images/arrow-down.svg?9426f) 100% 50% no-repeat;
width: 1.23076923em;
height: 1.23076923em;
margin-left: -1px
}

.vector-dropdown .vector-dropdown-content,.vector-dropdown > .vector-menu-content {
background-color: #ffffff;
border: 1px solid #a2a9b1;
box-shadow: 0 1px 1px 0 rgba(0,0,0,0.1);
transition-property: opacity;
transition-duration: 100ms;
padding: 4px 0;
width: max-content;
max-width: 200px
}

.vector-pinnable-element .vector-menu-heading,.vector-dropdown-content .vector-menu-heading {
display: flex;
align-items: center;
padding: 6px 14px;
font-size: 0.875rem;
align-self: center;
color: #54595d;
font-weight: normal;
cursor: default;
border-color: #c8ccd1;
border-width: 1px
}

.vector-pinnable-element .vector-menu-heading:not(.mw-selflink):visited,.vector-dropdown-content
.vector-menu-heading:not(.mw-selflink):visited {
color: #3366cc
}

.vector-pinnable-element .vector-menu-heading.selected a,.vector-dropdown-content .vector-menu-heading.selected
a,.vector-pinnable-element .vector-menu-heading.selected a:visited,.vector-dropdown-content
.vector-menu-heading.selected a:visited {
color: #202122
}

.vector-pinnable-element .mw-list-item a,.vector-dropdown-content .mw-list-item a {
display: flex;
align-items: center;
padding: 6px 14px;
font-size: 0.875rem;
color: #3366cc
}

.vector-pinnable-element .mw-list-item a:not(.mw-selflink):visited,.vector-dropdown-content .mw-list-item
a:not(.mw-selflink):visited {
color: #3366cc
}

.vector-pinnable-element .mw-list-item a.selected a,.vector-dropdown-content .mw-list-item a.selected
a,.vector-pinnable-element .mw-list-item a.selected a:visited,.vector-dropdown-content .mw-list-item a.selected
a:visited {
color: #202122
}

.vector-pinnable-element > *:not(:last-child),.vector-dropdown-content > *:not(:last-child) {
border-bottom: 1px solid #eaecf0
}

.vector-dropdown .mw-list-item a {
display: flex;
align-items: center;
padding: 6px 14px;
font-size: 0.875rem
}

.vector-dropdown .mw-list-item a:not(.mw-selflink):visited {
color: #3366cc
}

.vector-dropdown .mw-list-item a.selected a,.vector-dropdown .mw-list-item a.selected a:visited {
color: #202122
}

.vector-dropdown .mw-list-item a:not(.mw-selflink) {
color: #3366cc
}

.vector-menu-tabs {
float: left
}

.vector-menu-tabs .mw-list-item .mw-ui-icon {
margin: 2px 0 0 0
}

.vector-menu-tabs .mw-list-item a {
color: #3366cc
}

.vector-menu-tabs .mw-list-item.vector-tab-noicon a:focus,.vector-menu-tabs .mw-list-item.vector-tab-noicon a:hover {
text-decoration: none;
border-bottom: 1px solid
}

.vector-menu-tabs .mw-list-item.new a,.vector-menu-tabs .mw-list-item.new a:visited {
color: #dd3333
}

.vector-menu-tabs .mw-list-item.selected a,.vector-menu-tabs .mw-list-item.selected a:visited {
color: #202122;
border-bottom: 1px solid
}

.vector-menu-tabs .mw-list-item.vector-tab-noicon,.vector-page-toolbar-container .vector-menu-dropdown {
margin: 0 8px
}

.vector-menu-tabs .mw-list-item,.vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading {
white-space: nowrap
}

.vector-menu-tabs .mw-list-item,.vector-page-toolbar-container .vector-menu-dropdown {
float: left;
margin-bottom: 0
}

.vector-menu-tabs .mw-list-item > a,.vector-page-toolbar-container .vector-menu-dropdown > a,.vector-menu-tabs
.mw-list-item > .vector-menu-heading,.vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading {
display: inline-flex;
position: relative;
cursor: pointer;
max-height: 3.15384615em;
box-sizing: border-box;
font-weight: normal
}

.vector-menu-tabs .mw-list-item > .vector-menu-heading,.vector-page-toolbar-container .vector-menu-dropdown >
.vector-menu-heading {
font-size: inherit
}

.vector-menu-tabs .mw-list-item.vector-tab-noicon > a,.vector-page-toolbar-container
.vector-menu-dropdown.vector-tab-noicon > a,.vector-menu-tabs .mw-list-item >
.vector-menu-heading,.vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading {
padding: 12px 0 7px 0;
margin-bottom: -1px
}

.vector-feature-main-menu-pinned-enabled .vector-header-start
.vector-main-menu-landmark,.vector-feature-main-menu-pinned-disabled .vector-main-menu-container
.vector-main-menu-landmark {
display: none
}

.vector-main-menu {
box-sizing: border-box
}

.vector-main-menu #p-navigation .vector-menu-heading {
display: none
}

.vector-main-menu .vector-main-menu-action-opt-out a,.vector-main-menu .vector-main-menu-action-lang-alert
.vector-main-menu-action-content {
display: flex;
align-items: center;
padding: 6px 14px;
font-size: 0.875rem
}

.vector-main-menu .vector-main-menu-action-opt-out a:not(.mw-selflink):visited,.vector-main-menu
.vector-main-menu-action-lang-alert .vector-main-menu-action-content:not(.mw-selflink):visited {
color: #3366cc
}

.vector-main-menu .vector-main-menu-action-opt-out a.selected a,.vector-main-menu .vector-main-menu-action-lang-alert
.vector-main-menu-action-content.selected a,.vector-main-menu .vector-main-menu-action-opt-out a.selected
a:visited,.vector-main-menu .vector-main-menu-action-lang-alert .vector-main-menu-action-content.selected a:visited {
color: #202122
}

.vector-main-menu .vector-main-menu-action-opt-out a {
font-weight: bold
}

.vector-main-menu .vector-main-menu-action-lang-alert .vector-main-menu-action-content {
padding-top: 0
}

.vector-main-menu .vector-language-sidebar-alert {
padding: 8px;
margin: 0
}

#vector-main-menu-pinned-container .vector-main-menu {
margin-left: -14px;
margin-top: 11px;
padding: 6px 14px;
background-color: #f8f9fa
}

#vector-main-menu-pinned-container .vector-main-menu .vector-main-menu-action-opt-out
a,#vector-main-menu-pinned-container .vector-main-menu .vector-main-menu-action-lang-alert
.vector-main-menu-action-content {
padding-left: 0;
padding-right: 0
}

#vector-main-menu-unpinned-container .vector-main-menu .vector-language-sidebar-alert {
margin-bottom: 6px
}

.vector-page-titlebar {
display: flex;
justify-content: flex-end;
box-shadow: 0 1px #a2a9b1;
align-items: center
}

.vector-page-titlebar-blank {
box-shadow: none
}

.vector-page-titlebar .firstHeading {
flex-grow: 1;
border: 0
}

.vector-page-titlebar .vector-page-titlebar-toc.ve-active {
display: none !important
}

.vector-page-titlebar > .mw-ui-button {
font-size: 0.875em;
margin-top: 2px;
white-space: nowrap
}

.vector-page-titlebar > .mw-ui-button:not(.mw-ui-icon-element) {
min-width: auto
}

.vector-page-titlebar > .mw-ui-button:last-child,.vector-page-titlebar > .mw-portlet-lang:last-child {
margin-right: -12px
}

.vector-page-toolbar-container {
display: flex;
font-size: 0.8125em;
box-shadow: 0 1px #c8ccd1;
margin-bottom: 1px
}

.vector-page-toolbar-container .mw-portlet-views {
display: none
}

#left-navigation {
display: flex;
margin-left: -8px;
flex-grow: 1
}

#right-navigation {
display: flex;
margin-right: -8px
}

#right-navigation .vector-menu-content {
left: auto;
right: -1px
}

.vector-feature-page-tools-pinned-enabled .vector-page-toolbar-container
.vector-page-tools-landmark,.vector-feature-page-tools-pinned-disabled .vector-column-end .vector-page-tools-landmark {
display: none
}

.vector-column-end {
contain: paint
}

.vector-column-end .vector-page-tools-landmark {
position: sticky;
top: 0;
margin-top: 1.35em
}

#vector-page-tools-pinned-container .vector-page-tools {
width: 140px;
margin-left: 14px;
max-height: calc(100vh - 16px);
overflow-y: auto;
box-sizing: border-box;
padding-top: 1.125em;
padding-bottom: 24px
}

#vector-page-tools-pinned-container .vector-page-tools::after {
content: '';
display: block;
position: absolute;
bottom: 0;
left: 0;
right: 0;
height: 30px;
background: linear-gradient(rgba(255,255,255,0),#ffffff);
background-repeat: no-repeat;
background-position: -12px;
pointer-events: none
}

.vector-page-tools .vector-more-collapsible-item {
display: block
}

.vector-pinnable-header {
display: flex;
align-items: center;
padding: 6px 14px;
font-size: 0.875rem;
display: block
}

.vector-pinnable-header:not(.mw-selflink):visited {
color: #3366cc
}

.vector-pinnable-header.selected a,.vector-pinnable-header.selected a:visited {
color: #202122
}

.vector-pinned-container .vector-page-tools .vector-pinnable-header,.vector-pinned-container .vector-toc
.vector-pinnable-header {
padding: 12px 0 7px 0;
margin-bottom: -1px
}

.vector-pinnable-header-label {
display: inline-block;
color: #54595d;
font-size: 0.875rem;
margin: 0;
padding: 0;
border: 0
}

.vector-pinnable-header-toggle-button {
display: none;
border: 0;
padding: 0;
background-color: transparent;
color: #3366cc;
cursor: pointer;
text-align: left
}

.vector-pinnable-header-toggle-button:hover {
color: #447ff5
}

.vector-pinnable-header-toggle-button::before {
content: '[';
color: #54595d
}

.vector-pinnable-header-toggle-button::after {
content: ']';
color: #54595d
}

.vector-pinned-container .vector-pinnable-element .vector-pinnable-header,.vector-pinned-container
.vector-pinnable-element .vector-menu-heading,.vector-pinned-container .vector-pinnable-element .mw-list-item a {
padding-left: 0;
padding-right: 0
}

.vector-popup-notification {
font-size: 16px
}

.vector-sticky-header-container {
position: fixed;
top: 0;
left: 0;
right: 0;
z-index: 4;
transition: transform 250ms linear;
display: none;
transform: translateY(-100%);
opacity: 0
}

.vector-sticky-header {
display: flex;
align-items: center;
justify-content: space-between
}

.vector-sticky-header-start,.vector-sticky-header-end,.vector-sticky-header-icons,.vector-sticky-header-buttons,.vector-sticky-header-context-bar
{
display: flex;
align-items: center
}

.vector-sticky-header-start {
flex-grow: 1;
min-width: 0
}

.vector-sticky-header-context-bar-primary,.vector-sticky-header-end {
white-space: nowrap
}

.vector-sticky-header-context-bar {
border-left: 1px solid #c8c8c8;
padding-left: 30px;
min-width: 0;
margin-left: 30px
}

.vector-sticky-header-context-bar-primary {
overflow: hidden;
font-family: 'Linux Libertine','Georgia','Times',serif;
font-size: 1.5em;
text-overflow: ellipsis
}

.vector-sticky-header-context-bar-primary wbr {
display: none
}

.vector-sticky-header-end {
font-size: 0.875em
}

.vector-sticky-header-end,.vector-sticky-header-icons,.vector-sticky-header-buttons {
column-gap: 8px
}

.vector-sticky-header-buttons > .mw-ui-quiet {
padding: 5px
}

.vector-sticky-header .vector-search-box {
display: none
}

.vector-sticky-header.vector-header-search-toggled
.vector-sticky-header-search-toggle,.vector-sticky-header.vector-header-search-toggled .vector-sticky-header-context-bar
{
display: none
}

.vector-sticky-header.vector-header-search-toggled .vector-search-box {
display: block;
margin-left: 4px
}

.vector-sticky-header.vector-header-search-toggled .vector-search-box-show-thumbnail {
margin-left: -9px
}

.vector-sticky-header.vector-header-search-toggled .vector-search-box-show-thumbnail .cdx-text-input__start-icon {
color: #202122
}

@keyframes rotate {
from {
transform: rotate(0deg)
}

to {
transform: rotate(360deg)
}
}

.mw-watchlink a::before {
transition: transform 500ms
}

.mw-watchlink .loading::before {
outline: 0;
cursor: default;
pointer-events: none;
transform-origin: 50% 50%
}

.mw-ui-icon-wikimedia-unStar::before,.mw-ui-icon-wikimedia-star.loading::before {
transform: rotate(72deg)
}

#vector-toc-collapsed-checkbox {
display: none
}

.vector-toc {
max-height: 75vh;
box-sizing: border-box;
overflow-y: auto;
overflow-x: hidden;
background-color: #ffffff
}

.vector-toc .vector-pinnable-header-label {
overflow: unset
}

.vector-toc .vector-toc-numb {
display: none
}

.vector-toc .vector-toc-toggle {
display: none;
position: absolute;
top: 1px;
left: calc(-1 * 1.834em - 1px);
width: 1.834em;
height: 1.834em;
font-size: 0.75em;
transition: 100ms;
color: transparent;
cursor: pointer;
margin-top: 2px
}

.vector-toc .vector-toc-link {
word-break: break-word;
color: #3366cc;
display: block
}

.vector-toc .vector-toc-list-item-active > .vector-toc-link,.vector-toc
.vector-toc-level-1-active:not(.vector-toc-list-item-expanded) > .vector-toc-link,.vector-toc
.vector-toc-list-item-active.vector-toc-level-1-active > .vector-toc-link {
color: #202122;
font-weight: bold
}

.vector-toc .vector-toc-list-item-active > .vector-toc-link .vector-toc-text,.vector-toc
.vector-toc-level-1-active:not(.vector-toc-list-item-expanded) > .vector-toc-link .vector-toc-text,.vector-toc
.vector-toc-list-item-active.vector-toc-level-1-active > .vector-toc-link .vector-toc-text {
width: calc(100% + 14px)
}

.vector-toc .vector-toc-level-1-active:not(.vector-toc-list-item-active) > .vector-toc-link {
color: #202122
}

.vector-toc .vector-toc-text {
padding: 6px 0
}

.vector-toc .vector-toc-contents,.vector-toc .vector-toc-list {
margin: 0;
list-style: none
}

.vector-toc .vector-toc-list-item {
display: block;
position: relative;
list-style-type: none;
padding-left: 8px;
margin: 0
}

.vector-toc .vector-toc-list-item.vector-toc-level-1 {
padding-left: 0
}

.vector-toc .vector-toc-list-item a {
font-size: 0.875em
}

.client-js .vector-toc .vector-toc-level-1 .vector-toc-list-item {
display: none
}

.client-js .vector-toc .vector-toc-level-1.vector-toc-list-item-expanded .vector-toc-list-item {
display: block
}

.client-js .vector-toc .vector-toc-toggle {
display: block
}

.client-js .vector-toc .vector-toc-level-1.vector-toc-list-item-expanded .vector-toc-toggle {
transform: rotate(0deg)
}

.client-js body.ltr .vector-toc .vector-toc-toggle {
transform: rotate(-90deg)
}

.client-js body.rtl .vector-toc .vector-toc-toggle {
transform: rotate(90deg)
}

.vector-toc-landmark {
display: none
}

.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar
.vector-toc-landmark,.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header
.vector-toc-landmark,.vector-feature-toc-pinned-enabled .mw-table-of-contents-container.vector-toc-landmark {
display: block
}

.mw-ui-icon::before {
opacity: 0.87
}
}

@media screen and (min-width: 1000px) {
.mw-page-container {
padding-left:2.75em;
padding-right: 2.75em
}
}

@media screen and (min-width: 1200px) {
.mw-page-container {
padding-left:3.25em;
padding-right: 3.25em
}
}

@media screen and (min-width: 1000px) {
.vector-feature-zebra-design-disabled .vector-header-container {
padding-left:2.75em;
padding-right: 2.75em
}
}

@media screen and (min-width: 1200px) {
.vector-feature-zebra-design-disabled .vector-header-container {
padding-left:3.25em;
padding-right: 3.25em
}
}

@media screen and (min-width: 1000px) {
.vector-feature-zebra-design-enabled .vector-header-container .mw-header,.vector-feature-zebra-design-enabled
.vector-header-container .vector-sticky-header {
padding-left:2.75em;
padding-right: 2.75em
}
}

@media screen and (min-width: 1200px) {
.vector-feature-zebra-design-enabled .vector-header-container .mw-header,.vector-feature-zebra-design-enabled
.vector-header-container .vector-sticky-header {
padding-left:3.25em;
padding-right: 3.25em
}
}

@media screen and (min-width: 1000px) {
.mw-page-container-inner {
display:grid;
column-gap: 36px;
grid-template: min-content min-content 1fr min-content / 12.25em minmax(0,1fr);
grid-template-areas: 'siteNotice siteNotice' 'mainMenu pageContent' 'toc pageContent' 'footer footer'
}

.vector-sitenotice-container {
grid-area: siteNotice
}

.mw-table-of-contents-container {
grid-area: toc;
overflow-anchor: none
}

.vector-main-menu-container {
grid-area: mainMenu;
overflow-anchor: none
}

.mw-content-container {
grid-area: pageContent
}

.mw-footer-container {
grid-area: footer
}
}

@media screen and (min-width: 1200px) {
.mw-page-container-inner {
grid-template-columns:15.5em minmax(0,1fr)
}

.mw-header {
display: grid;
column-gap: 36px;
grid-template: auto / 15.5em minmax(0,1fr);
grid-template-areas: 'headerStart headerEnd'
}

.mw-header .vector-header-start {
grid-area: headerStart
}

.mw-header .vector-header-end {
grid-area: headerEnd
}
}

@media screen and (min-width: 1000px) {
.mw-body {
display:grid;
grid-template: min-content min-content min-content 1fr / minmax(0,60em) min-content;
grid-template-areas: 'titlebar-cx .' 'titlebar columnEnd' 'toolbar columnEnd' 'content columnEnd'
}

.mw-body .vector-page-titlebar {
grid-area: titlebar
}

.mw-body .vector-page-toolbar {
grid-area: toolbar
}

.mw-body #bodyContent {
grid-area: content
}

.mw-body .vector-column-end {
grid-area: columnEnd;
overflow-anchor: none
}

.vector-feature-page-tools-pinned-enabled .mw-body {
column-gap: 36px
}

.vector-feature-limited-width-disabled .mw-body,.vector-feature-limited-width-content-disabled .mw-body {
grid-template-columns: minmax(0,1fr) min-content
}
}

@media screen and (min-width: 1000px) {
.vector-feature-toc-pinned-enabled #mw-panel-toc {
contain:paint;
margin-left: -22px
}

#vector-toc-pinned-container {
position: sticky;
top: 0
}

.vector-feature-toc-pinned-enabled #vector-toc-pinned-container {
margin-top: 1.5em
}

.vector-feature-main-menu-pinned-disabled.vector-feature-toc-pinned-enabled #vector-toc-pinned-container {
margin-top: 1.85em
}

#vector-toc-pinned-container .vector-toc {
max-height: calc(100vh - 16px);
padding-top: 1.125em;
padding-left: 22px;
padding-right: 14px;
padding-bottom: 24px
}

#vector-toc-pinned-container .vector-toc::after {
content: '';
display: block;
position: absolute;
bottom: 0;
left: 0;
right: 0;
height: 30px;
background: linear-gradient(rgba(255,255,255,0),#ffffff);
background-repeat: no-repeat;
background-position: -12px;
pointer-events: none
}
}

@media screen and (max-width: 999px) {
#vector-toc-collapsed-button,body:not(.vector-below-page-title) #vector-page-titlebar-toc-label {
padding:7px 12px
}
}

@media screen and (max-width: 999px) {
.client-js .vector-page-titlebar-toc {
display:block
}

.client-js .vector-page-titlebar-toc > .vector-menu-content {
max-width: none
}

.client-js .vector-page-titlebar-toc .vector-toc {
width: max-content;
min-width: 200px;
max-width: min(0.85 * 60em,75vw)
}

.client-js .vector-page-titlebar-toc .vector-toc .vector-pinnable-header {
padding-left: 36px
}

.client-js .vector-page-titlebar-toc .vector-toc .vector-toc-contents {
padding-right: 14px;
padding-left: 36px
}

.client-js .vector-below-page-title .vector-page-titlebar-toc {
position: fixed;
top: 12px;
left: 12px;
margin: 0;
z-index: 3
}
}

@media screen and (min-width: 1000px) {
.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar-toc {
display:block
}

.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar-toc >
.vector-menu-content {
max-width: none
}

.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar-toc
.vector-toc {
width: max-content;
min-width: 200px;
max-width: min(0.85 * 60em,75vw)
}

.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar-toc
.vector-toc .vector-pinnable-header {
padding-left: 36px
}

.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar-toc
.vector-toc .vector-toc-contents {
padding-right: 14px;
padding-left: 36px
}

.client-js.vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible).vector-below-page-title
.vector-page-titlebar-toc {
position: fixed;
top: 12px;
left: 12px;
margin: 0;
z-index: 3
}

.client-js.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header-toc {
display: block
}

.client-js.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header-toc >
.vector-menu-content {
max-width: none
}

.client-js.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header-toc .vector-toc {
width: max-content;
min-width: 200px;
max-width: min(0.85 * 60em,75vw)
}

.client-js.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header-toc .vector-toc
.vector-pinnable-header {
padding-left: 36px
}

.client-js.vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header-toc .vector-toc
.vector-toc-contents {
padding-right: 14px;
padding-left: 36px
}
}

@media screen and (max-width: 999px) {
.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-collapsed-button {
display:block
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-pinned-container {
position: relative;
display: block
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-pinned-container > .vector-menu-content {
max-width: none
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-pinned-container .vector-toc {
width: max-content;
min-width: 200px;
max-width: min(0.85 * 60em,75vw)
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-pinned-container .vector-toc .vector-pinnable-header {
padding-left: 36px
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-pinned-container .vector-toc .vector-toc-contents {
padding-right: 14px;
padding-left: 36px
}

.client-nojs.vector-feature-toc-pinned-enabled .vector-toc {
display: none;
position: absolute;
top: 36px;
left: -12px;
margin-top: 0.5em;
border: 1px solid #a2a9b1;
z-index: 3
}

.client-nojs.vector-feature-toc-pinned-enabled .vector-toc
.vector-pinnable-header,.client-nojs.vector-feature-toc-pinned-enabled .vector-toc .vector-toc-contents {
padding-left: 14px
}

.client-nojs.vector-feature-toc-pinned-enabled #vector-toc-collapsed-checkbox:checked ~ .mw-table-of-contents-container
.vector-toc {
display: block
}
}

@media screen and (min-width: 720px) {
.vector-user-menu.user-links-collapsible-item,.vector-user-menu .user-links-collapsible-item {
display:none
}
}

@media screen and (min-width: 1000px) {
.vector-user-links .mw-portlet-vector-user-menu-overflow {
margin-right:8px
}

.vector-user-links .mw-portlet-vector-user-menu-overflow .vector-menu-content-list {
column-gap: 8px
}
}

@media screen and (max-width: 719px) {
.vector-user-links .mw-portlet-vector-user-menu-overflow .user-links-collapsible-item {
display:none
}
}

@media screen and (min-width: 1200px) {
#pt-userpage-2 {
max-width:14.28571429em
}
}

@media screen and (min-width: 1200px) {
.client-js .mw-header .vector-search-box.vector-search-box-auto-expand-width {
margin-left:-24px
}
}

@media screen and (min-width: 1000px) {
.mw-header .vector-search-box {
margin-right:12px
}
}

@media screen and (max-width: 999px) {
.mw-header {
}

.mw-header.vector-header-search-toggled .vector-header-start,.mw-header.vector-header-search-toggled .search-toggle {
display: none
}

.mw-header.vector-header-search-toggled .vector-search-box-collapses > div {
display: block
}

.mw-header.vector-header-search-toggled .vector-search-box {
position: relative;
margin-right: 12px
}

.mw-header.vector-header-search-toggled .vector-search-box > div {
max-width: none
}

.mw-header.vector-header-search-toggled .cdx-search-input__input-wrapper {
position: static
}

.mw-header.vector-header-search-toggled .cdx-typeahead-search--expanded .cdx-search-input__end-button {
border-bottom-right-radius: 0
}
}

@media screen and (min-width: 720px) {
.vector-page-toolbar-container .mw-portlet-views:not(.emptyPortlet) {
display:block
}
}

@media screen and (min-width: 720px) {
.vector-page-tools .vector-more-collapsible-item {
display:none
}
}

@media screen and (max-width: 719px) {
.vector-page-tools .vector-has-collapsible-items {
display:block
}
}

@media screen and (min-width: 1000px) {
.client-js .vector-pinnable-header-unpinned .vector-pinnable-header-pin-button,.client-js .vector-pinnable-header-pinned
.vector-pinnable-header-unpin-button {
display:inline-block
}
}

@media screen and (max-width: 999px) {
.client-js .vector-pinned-container,.client-nojs .vector-pinned-container {
display:none
}
}

@media screen and (min-width: 1000px) {
.client-js.vector-sticky-header-enabled {
scroll-padding-top:calc(3.125rem + 75px)
}

.client-js.vector-sticky-header-enabled .vector-sticky-header-container {
display: flex
}

.client-js.vector-sticky-header-enabled .vector-sticky-header-visible .vector-sticky-header-container {
opacity: 1;
transform: translateY(0)
}

.client-js.vector-sticky-header-enabled.vector-feature-toc-pinned-enabled
#vector-toc-pinned-container,.client-js.vector-sticky-header-enabled.vector-feature-page-tools-pinned-enabled
.vector-page-tools-landmark,.client-js.vector-sticky-header-enabled
.mw-sticky-header-element,.client-js.vector-sticky-header-enabled .charts-stickyhead th {
top: 3.125rem !important
}

.client-js.vector-sticky-header-enabled #vector-toc-pinned-container .vector-toc,.client-js.vector-sticky-header-enabled
#vector-page-tools-pinned-container .vector-page-tools {
max-height: calc(100vh - 3.125rem - 16px)
}
}

@media screen and (max-width: 999px) {
.client-js .vector-page-titlebar .vector-toc-landmark {
display:block
}

.client-js .mw-table-of-contents-container.vector-toc-landmark {
display: none
}
}

@media all {
.mw-logo {
display: flex;
height: 100%;
align-items: center;
min-width: 13.875em
}

.vector-feature-main-menu-pinned-disabled .mw-logo {
margin-left: 20px
}

.mw-logo-icon {
float: left;
margin-right: 10px;
display: none;
width: 3.125em;
height: 3.125em
}

.mw-logo-container {
float: left;
max-width: 120px
}

.mw-logo-container img {
width: 100%
}

.mw-logo-wordmark {
display: block;
margin: 0 auto
}

.mw-logo-tagline {
display: block;
margin: 5px auto 0
}
}

@media all and (min-width: 720px) {
.mw-logo-icon {
display:block
}
}

@media all and (min-width: 720px) {
.mw-logo-container {
max-width:none
}

.mw-logo-container img {
width: auto
}
}

@media print {
.vector-page-toolbar,.vector-header-start >
*:not(.mw-logo),.vector-header-end,#mw-panel-toc,#vector-sticky-header,#p-lang-btn,.vector-menu-checkbox,nav,#vector-page-titlebar-toc,#footer
{
display: none !important
}
}

.vector-pinned-container {
display: none
}

@supports (display: grid) {
.vector-pinned-container {
display:block
}
}

@media screen {
div.thumbinner {
border: 1px solid #c8ccd1;
background-color: #f8f9fa;
font-size: 94%
}

.thumbimage {
background-color: #ffffff;
border: 1px solid #c8ccd1
}

.thumbcaption {
border: 0;
font-size: 94%
}

.thumbborder {
border: 1px solid #eaecf0
}

.magnify {
float: right;
margin-left: 3px
}

.magnify a {
display: block;
text-indent: 15px;
white-space: nowrap;
overflow: hidden;
width: 15px;
height: 11px;
background-image: url(/w/resources/src/mediawiki.skinning/images/magnify-clip-ltr.svg?8330e);
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none
}

.mw-content-ltr .thumbcaption {
text-align: left
}

.mw-content-rtl .thumbcaption {
text-align: right
}

.mw-content-ltr .magnify {
margin-left: 3px;
margin-right: 0;
float: right
}

.mw-content-ltr .magnify a {
background-image: url(/w/resources/src/mediawiki.skinning/images/magnify-clip-ltr.svg?8330e)
}

.mw-content-rtl .magnify {
margin-left: 0;
margin-right: 3px;
float: left
}

.mw-content-rtl .magnify a {
background-image: url(/w/resources/src/mediawiki.skinning/images/magnify-clip-rtl.svg?38fd5)
}

a.new {
color: #dd3333
}

a.mw-selflink {
color: inherit;
font-weight: bold;
text-decoration: inherit
}

a.mw-selflink:hover {
cursor: inherit;
text-decoration: inherit
}

a.mw-selflink:active,a.mw-selflink:visited {
color: inherit
}

a.new:visited {
color: #a55858
}

.mw-parser-output a.extiw,.mw-parser-output a.external {
color: #3366cc
}

.mw-parser-output a.extiw:visited,.mw-parser-output a.external:visited {
color: #795cb2
}

.mw-parser-output a.extiw:active,.mw-parser-output a.external:active {
color: #faa700
}

.mw-underline-always a {
text-decoration: underline
}

.mw-underline-never a {
text-decoration: none
}

.plainlinks a.external {
background: none !important;
padding: 0 !important
}

.mw-body-content::after {
clear: both;
content: '';
display: block
}

.mw-body-content a.external.free {
word-wrap: break-word
}

.mw-body-content .error {
font-size: larger;
color: #dd3333
}

.rtl .mw-parser-output a.external.free,.rtl .mw-parser-output a.external.autonumber {
direction: ltr;
unicode-bidi: embed
}

.mw-hide-empty-elt .mw-parser-output:not(.mw-show-empty-elt) .mw-empty-elt {
display: none
}

.wikitable {
background-color: #f8f9fa;
color: #202122;
margin: 1em 0;
border: 1px solid #a2a9b1;
border-collapse: collapse
}

.wikitable > tr > th,.wikitable > tr > td,.wikitable > * > tr > th,.wikitable > * > tr > td {
border: 1px solid #a2a9b1;
padding: 0.2em 0.4em
}

.wikitable > tr > th,.wikitable > * > tr > th {
background-color: #eaecf0;
text-align: center
}

.wikitable > caption {
font-weight: bold
}

#catlinks {
text-align: left
}

.catlinks {
background-color: #f8f9fa;
margin-top: 1em;
border: 1px solid #a2a9b1;
padding: 5px;
clear: both
}

.catlinks ul {
display: inline;
margin: 0;
padding: 0;
list-style: none
}

.catlinks li {
display: inline-block;
line-height: 1.25em;
margin: 0.125em 0;
border-left: 1px solid #a2a9b1;
padding: 0 0.5em
}

.catlinks li:first-child {
border-left: 0;
padding-left: 0.25em
}

.catlinks li a.mw-redirect {
font-style: italic
}

.mw-hidden-cats-hidden,.catlinks-allhidden {
display: none
}

.emptyPortlet {
display: none
}

.printfooter,.client-nojs #t-print {
display: none
}

.mw-editsection {
-moz-user-select: none;
-webkit-user-select: none;
-ms-user-select: none;
user-select: none
}

.mw-editsection,.mw-editsection-like {
font-size: small;
font-weight: normal;
margin-left: 1em;
vertical-align: baseline;
line-height: 0
}

.mw-content-ltr .mw-editsection,.mw-content-rtl .mw-content-ltr .mw-editsection,.mw-content-ltr
.mw-editsection-like,.mw-content-rtl .mw-content-ltr .mw-editsection-like {
margin-left: 1em;
margin-right: 0
}

.mw-content-rtl .mw-editsection,.mw-content-ltr .mw-content-rtl .mw-editsection,.mw-content-rtl
.mw-editsection-like,.mw-content-ltr .mw-content-rtl .mw-editsection-like {
margin-right: 1em;
margin-left: 0
}

.usermessage {
background-color: #fef6e7;
border: 1px solid #edab00;
color: #000000;
font-weight: bold;
margin: 2em 0 1em;
padding: 0.5em 1em;
vertical-align: middle
}

a {
text-decoration: none;
color: #3366cc;
background: none
}

a:not([href]) {
cursor: pointer
}

a:visited {
color: #795cb2
}

a:active {
color: #faa700
}

a:hover,a:focus {
text-decoration: underline
}

a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur) {
text-decoration: none
}

img {
border: 0;
vertical-align: middle
}

hr {
height: 1px;
background-color: #a2a9b1;
border: 0;
margin: 0.2em 0
}

h1,h2,h3,h4,h5,h6 {
color: #000000;
margin: 0;
padding-top: 0.5em;
padding-bottom: 0.17em;
overflow: hidden
}

h1,h2 {
margin-bottom: 0.6em;
border-bottom: 1px solid #a2a9b1
}

h3,h4,h5 {
margin-bottom: 0.3em
}

h1 {
font-size: 188%;
font-weight: normal
}

h2 {
font-size: 150%;
font-weight: normal
}

h3 {
font-size: 128%
}

h4 {
font-size: 116%
}

h5 {
font-size: 108%
}

h6 {
font-size: 100%
}

p {
margin: 0.4em 0 0.5em 0
}

p img {
margin: 0
}

ul {
margin: 0.3em 0 0 1.6em;
padding: 0
}

ol {
margin: 0.3em 0 0 3.2em;
padding: 0;
list-style-image: none
}

li {
margin-bottom: 0.1em
}

dt {
font-weight: bold;
margin-bottom: 0.1em
}

dl {
margin-top: 0.2em;
margin-bottom: 0.5em
}

dd {
margin-left: 1.6em;
margin-bottom: 0.1em
}

pre,code,tt,kbd,samp,.mw-code {
font-family: monospace,monospace
}

pre,code,.mw-code {
background-color: #f8f9fa;
color: #000000;
border: 1px solid #eaecf0
}

code {
border-radius: 2px;
padding: 1px 4px
}

pre,.mw-code {
padding: 1em;
white-space: pre-wrap;
overflow-x: hidden;
word-wrap: break-word
}

table {
font-size: 100%
}

fieldset {
border: 1px solid #2a4b8d;
margin: 1em 0 1em 0;
padding: 0 1em 1em
}

legend {
padding: 0.5em
}

form {
border: 0;
margin: 0
}

textarea {
display: block;
box-sizing: border-box;
width: 100%;
border: 1px solid #a2a9b1;
padding: 0.1em
}

.center {
width: 100%;
text-align: center
}

*.center * {
margin-left: auto;
margin-right: auto
}

.small {
font-size: 94%
}

table.small {
font-size: 100%
}

@counter-style meetei {
system: numeric;
symbols: '\ABF0' '\ABF1' '\ABF2' '\ABF3' '\ABF4' '\ABF5' '\ABF6' '\ABF7' '\ABF8' '\ABF9';
suffix: ') '
}

@counter-style santali {
system: numeric;
symbols: '\1C50' '\1C51' '\1C52' '\1C53' '\1C54' '\1C55' '\1C56' '\1C57' '\1C58' '\1C59'
}

@counter-style myanmar_with_period {
system: numeric;
symbols: '\1040' '\1041' '\1042' '\1043' '\1044' '\1045' '\1046' '\1047' '\1048' '\1049';
suffix: '\104B\0020'
}

ol:lang(azb) li,ol:lang(bcc) li,ol:lang(bgn) li,ol:lang(bqi) li,ol:lang(fa) li,ol:lang(glk) li,ol:lang(kk-arab)
li,ol:lang(lrc) li,ol:lang(luz) li,ol:lang(mzn) li {
list-style-type: persian
}

ol:lang(ckb) li,ol:lang(sdh) li {
list-style-type: arabic-indic
}

ol:lang(hi) li,ol:lang(mai) li,ol:lang(mr) li,ol:lang(ne) li {
list-style-type: devanagari
}

ol:lang(as) li,ol:lang(bn) li {
list-style-type: bengali
}

ol:lang(mni) li {
list-style-type: meetei
}

ol:lang(or) li {
list-style-type: oriya
}

ol:lang(sat) li {
list-style-type: santali
}

ol:lang(blk) li,ol:lang(kjp) li,ol:lang(ksw) li,ol:lang(mnw) li,ol:lang(my) li,ol:lang(shn) li {
list-style-type: myanmar_with_period
}

.mw-content-ltr ul,.mw-content-rtl .mw-content-ltr ul {
margin: 0.3em 0 0 1.6em;
padding: 0
}

.mw-content-rtl ul,.mw-content-ltr .mw-content-rtl ul {
margin: 0.3em 1.6em 0 0;
padding: 0
}

.mw-content-ltr ol,.mw-content-rtl .mw-content-ltr ol {
margin: 0.3em 0 0 3.2em;
padding: 0
}

.mw-content-rtl ol,.mw-content-ltr .mw-content-rtl ol {
margin: 0.3em 3.2em 0 0;
padding: 0
}

.mw-content-ltr dd,.mw-content-rtl .mw-content-ltr dd {
margin-left: 1.6em;
margin-right: 0
}

.mw-content-rtl dd,.mw-content-ltr .mw-content-rtl dd {
margin-right: 1.6em;
margin-left: 0
}

h1:lang(anp),h1:lang(as),h1:lang(bh),h1:lang(bho),h1:lang(blk),h1:lang(bn),h1:lang(gu),h1:lang(hi),h1:lang(kjp),h1:lang(kn),h1:lang(ks),h1:lang(ksw),h1:lang(mag),h1:lang(ml),h1:lang(mr),h1:lang(my),h1:lang(mai),h1:lang(mnw),h1:lang(ne),h1:lang(new),h1:lang(or),h1:lang(pa),h1:lang(pi),h1:lang(rki),h1:lang(sa),h1:lang(shn),h1:lang(syl),h1:lang(ta),h1:lang(te)
{
line-height: 1.6em !important
}

h2:lang(anp),h2:lang(as),h2:lang(bh),h2:lang(bho),h2:lang(blk),h2:lang(bn),h2:lang(gu),h2:lang(hi),h2:lang(kjp),h2:lang(kn),h2:lang(ks),h2:lang(ksw),h2:lang(mag),h2:lang(ml),h2:lang(mr),h2:lang(my),h2:lang(mai),h2:lang(mnw),h2:lang(ne),h2:lang(new),h2:lang(or),h2:lang(pa),h2:lang(pi),h2:lang(rki),h2:lang(sa),h2:lang(shn),h2:lang(syl),h2:lang(ta),h2:lang(te),h3:lang(anp),h3:lang(as),h3:lang(bh),h3:lang(bho),h3:lang(blk),h3:lang(bn),h3:lang(gu),h3:lang(hi),h3:lang(kjp),h3:lang(kn),h3:lang(ks),h3:lang(ksw),h3:lang(mag),h3:lang(ml),h3:lang(mr),h3:lang(my),h3:lang(mai),h3:lang(mnw),h3:lang(ne),h3:lang(new),h3:lang(or),h3:lang(pa),h3:lang(pi),h3:lang(rki),h3:lang(sa),h3:lang(shn),h3:lang(syl),h3:lang(ta),h3:lang(te),h4:lang(anp),h4:lang(as),h4:lang(bh),h4:lang(bho),h4:lang(blk),h4:lang(bn),h4:lang(gu),h4:lang(hi),h4:lang(kjp),h4:lang(kn),h4:lang(ks),h4:lang(ksw),h4:lang(mag),h4:lang(ml),h4:lang(mr),h4:lang(my),h4:lang(mai),h4:lang(mnw),h4:lang(ne),h4:lang(new),h4:lang(or),h4:lang(pa),h4:lang(pi),h4:lang(rki),h4:lang(sa),h4:lang(shn),h4:lang(syl),h4:lang(ta),h4:lang(te),h5:lang(anp),h5:lang(as),h5:lang(bh),h5:lang(bho),h5:lang(blk),h5:lang(bn),h5:lang(gu),h5:lang(hi),h5:lang(kjp),h5:lang(kn),h5:lang(ks),h5:lang(ksw),h5:lang(mag),h5:lang(ml),h5:lang(mr),h5:lang(my),h5:lang(mai),h5:lang(mnw),h5:lang(ne),h5:lang(new),h5:lang(or),h5:lang(pa),h5:lang(pi),h5:lang(rki),h5:lang(sa),h5:lang(shn),h5:lang(syl),h5:lang(ta),h5:lang(te),h6:lang(anp),h6:lang(as),h6:lang(bh),h6:lang(bho),h6:lang(blk),h6:lang(bn),h6:lang(gu),h6:lang(hi),h6:lang(kjp),h6:lang(kn),h6:lang(ks),h6:lang(ksw),h6:lang(mag),h6:lang(ml),h6:lang(mr),h6:lang(my),h6:lang(mai),h6:lang(mnw),h6:lang(ne),h6:lang(new),h6:lang(or),h6:lang(pa),h6:lang(pi),h6:lang(rki),h6:lang(sa),h6:lang(shn),h6:lang(syl),h6:lang(ta),h6:lang(te)
{
line-height: 1.4em
}

h2:lang(th) {
line-height: 1.6
}
}

@media print {
table.floatright,div.floatright {
border: 0
}

table.floatleft,div.floatleft {
border: 0
}

div.thumb {
page-break-inside: avoid
}

div.thumb a {
border-bottom: 0
}

div.thumbinner {
border: 1px;
background-color: #ffffff;
font-size: 10pt;
color: #666666;
border-radius: 2px;
min-width: 100px
}

.thumbborder {
border: 1pt solid #dddddd
}

.magnify {
display: none
}

.mw-parser-output a.external {
}

.mw-parser-output a.external.text::after,.mw-parser-output a.external.autonumber::after {
content: ' (' attr(href) ')';
word-break: break-all;
word-wrap: break-word
}

.mw-parser-output a.external.text[href^='//']:after,.mw-parser-output a.external.autonumber[href^='//']:after {
content: ' (https:' attr(href) ')'
}

.wikitable {
background: #fff;
margin: 1em 0;
border: 1pt solid #aaa;
border-collapse: collapse;
font-size: 10pt;
page-break-inside: avoid
}

.wikitable > caption {
padding: 5px;
font-size: 10pt
}

.wikitable > tr > th,.wikitable > tr > td,.wikitable > * > tr > th,.wikitable > * > tr > td {
background: #fff !important;
color: #000 !important;
border: 1pt solid #aaa;
padding: 0.4em 0.6em
}

.wikitable > tr > th,.wikitable > * > tr > th {
text-align: center
}

table.listing,table.listing td {
border: 1pt solid #000;
border-collapse: collapse
}

.catlinks ul {
display: inline;
padding: 0;
list-style: none
}

.catlinks li {
display: inline-block;
line-height: 1.15;
margin: 0.1em 0;
border-left: 1pt solid #aaa;
padding: 0 0.4em
}

.catlinks li:first-child {
border-left: 0;
padding-left: 0.2em
}

.mw-hidden-catlinks,.catlinks {
display: none
}

.mw-editsection,.mw-editsection-like,.mw-indicators,#siteNotice,.usermessage {
display: none
}

.printfooter {
padding: 1em 0
}

.center {
text-align: center
}

a {
background: none !important;
padding: 0 !important
}

a,a.external,a.new,a.stub {
color: inherit !important;
text-decoration: inherit !important
}

dt {
font-weight: bold
}

h1,h2,h3,h4,h5,h6 {
font-weight: bold;
page-break-after: avoid;
page-break-before: avoid
}

p {
margin: 1em 0;
line-height: 1.2;
orphans: 3;
widows: 3
}

img,figure {
page-break-inside: avoid
}

img {
border: 0;
vertical-align: middle
}

pre,.mw-code {
background: #fff;
color: #000;
border: 1pt dashed #000;
padding: 1em;
font-size: 8pt;
white-space: pre-wrap;
overflow-x: hidden;
word-wrap: break-word
}

ul {
list-style-type: square
}
}