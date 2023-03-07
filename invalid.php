<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Skill Space</title>
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel='stylesheet' href='https://codepen.io/uzcho_/pen/eYdmdXw.css'><link rel="stylesheet" href="./style.css">
<style>
    body {
        background-color: #dadada;
  display: flex;
  flex-flow: row wrap;
  align-content: center;
  justify-content: center;
}

div {
  width: 100%;
  text-align: center;
}

.number {
 
  background: #fff;
  position: relative;
  font: 900 30vmin "Consolas";
  letter-spacing: 5vmin;
  text-shadow: 2px -1px 0 #000, 4px -2px 0 #0a0a0a, 6px -3px 0 #0f0f0f, 8px -4px 0 #141414, 
      10px -5px 0 #222020, 12px -6px 0 #1f1f1f, 14px -7px 0 #dadada, 16px -8px 0 #292929;
}
.number::before {
  background-color: #03c4eb;
  background-image: radial-gradient(closest-side at 50% 50%, #434343 100%, rgba(0, 0, 0, 0)), 
      radial-gradient(closest-side at 50% 50%, #dadada 100%, rgba(0, 0, 0, 0));
  background-repeat: repeat-x;
  background-size: 40vmin 40vmin;
  background-position: -100vmin 20vmin, 100vmin -25vmin;
  width: 100%;
  height: 100%;
  mix-blend-mode: screen;
  -webkit-animation: moving 10s linear infinite both;
          animation: moving 10s linear infinite both;
  display: block;
  position: absolute;
  content: "";
}
@-webkit-keyframes moving {
  to {
    background-position: 100vmin 20vmin, -100vmin -25vmin;
  }
}
@keyframes moving {
  to {
    background-position: 100vmin 20vmin, -100vmin -25vmin;
  }
}

.text {
  font: 400 5vmin "Courgette";
}
.text span {
  font-size: 10vmin;
}
    // VARIABLES
$n: null;
$bf: "&::before";
$af: "&::after";
$bfaf: $bf, $af;
$bdt: border-top;
$bdr: border-right;
$bdb: border-bottom;
$bdl: border-left;
$bl: block;
$fl: flex;
$in: inline;
$ib: inline-block;
$no: none;
$ab: absolute;
$rl: relative;
$fx: fixed;
$st: sticky;
$c: center;
$t: top;
$r: right;
$b: bottom;
$l: left;
$rp: repeat;
$rpx: repeat-x;
$rpy: repeat-y;
$nrp: no-repeat;
$rw: row wrap;
$rnw: row nowrap;
$cw: column wrap;
$cnw: column nowrap;
$spa: space-around;
$spb: space-between;

// DIMENSION
@mixin _dimension($width, $height: $width){
    width: $width;
    height: $height
}

// SPACE
@mixin _space($margin, $padding: $margin){
    margin: $margin;
    padding: $padding
}

// OFFSET
@mixin _offset($top, $right, $bottom, $left){
    top: $top;
    right: $right;
    bottom: $bottom;
    left: $left
}

// LAYOUT
@mixin _layout($display, $position, $float){
    display: $display;
    position: $position;
    float: $float
}

// RELATIVE BOX
@mixin _relative-box($background, $margin, $padding, $width, $height: $width){
    background: $background;
    @include _dimension($width, $height);
    @include _space($margin, $padding)
}

// SOLID BOX
@mixin _solid-box($background, $padding, $top, $right, $bottom, $left, $width, $height: $width){
    @include _relative-box($background, $n, $padding, $width, $height);
    @include _offset($top, $right, $bottom, $left)
}

// FLEXBOX
@mixin _flexbox($position, $flex-flow, $align-items, $align-content, $justify-content: $align-content){
    @include _layout($fl, $position, $n);
    flex-flow: $flex-flow;
    align-items: $align-items;
    align-content: $align-content;
    justify-content: $justify-content
}

// TEXT
@mixin _text($color, $font, $text-align){
    color: $color;
    font: $font;
    text-align: $text-align
}

// PSEUDO COMPLETE
@mixin _pseudo-complete($selector, $display, $background, $top, $right, $bottom, $left, $width, $height: $width){
    #{$selector}{
        @include _solid-box($background, $n, $top, $right, $bottom, $left, $width, $height);
        @include _layout($display, $ab, $n);
        @content;
        content: ""
    }
}

// PSEUDO UNCOMPLETE
@mixin _pseudo-uncomplete($selector, $display){
    #{$selector}{
        @content;
        @include _layout($display, $ab, $n);
        content: ""
    }
}

// ANIMATION
@mixin _animation($name, $arguments, $type-of-keyframes){
    animation: $name $arguments;
    @if $type-of-keyframes == to{
        @keyframes #{$name}{
            to{
                @content;
            }
        }
    }
    @else{
        @keyframes #{$name}{
            @content;
        }
    }
}

// ANIMATION HIDE-SHOW
@mixin _hide-show($arguments){
    @include _animation(hide-show, $arguments, x){
        0%, 99%{
            opacity: 0
        }
        100%{
            opacity: 1
        }
    }
}

// KEYFRAMES
@mixin _keyframes($name, $type-of-keyframes){
    @if $type-of-keyframes == to{
        @keyframes #{$name}{
            to{
                @content;
            }
        }
    }
    @else{
        @keyframes #{$name}{
            @content;
        }
    }
}

// ARROW
@mixin _arrow($type-of-border_1, $type-of-border_2, $type-of-border_3, $border-width, $border-color){
    --tsp: calc(#{$border-width}/2) solid transparent;
    $solid: $border-width solid $border-color;
    #{$type-of-border_1}: var(--tsp);
    #{$type-of-border_2}: var(--tsp);
    #{$type-of-border_3}: $solid
}

// FACE 3D
@mixin _face-3d($translateZ){
    .face-3d{
        --tz: translateZ(#{$translateZ});
        @content;
        @include _dimension(100%);
        position: $ab
    }
    
    .front{transform: var(--tz)}
    .top{transform: rotateX(90deg) var(--tz)}
    .right{right: 0; transform: rotateY(90deg) var(--tz)}
    .bottom{bottom: 0; transform: rotateX(-90deg) var(--tz)}
    .left{transform: rotateY(-90deg) var(--tz)}
    .back{transform: rotateY(180deg) var(--tz)}
}

// BOX & TEXT SHADOW
@function _shadow($length, $direction, $value, $h-offset, $v-offset, $blur, $spread, $color){
    @for $i from 1 through $length{
        $blur-spread-color: $blur $spread hsl(0, 0, 100% - ($i * $color));
        @if $direction == vertical{
            $value: $value, $h-offset ($i * $v-offset) $blur-spread-color
        }
        @else{
            $value: $value, ($i * $h-offset) $v-offset $blur-spread-color
        }
    }
    @return $value;
}

// BACKGROUND IMAGE
@mixin _image($background-color, $background-image, $background-size, 
    $background-position, $background-repeat){
    background-color: $background-color;
    background-image: $background-image;
    background-size: $background-size;
    background-position: $background-position;
    background-repeat: $background-repeat
}
     button{
margin-top: 10px;
  background: #03C4EB;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
} 
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
    <div class="cardblock" style="background-color: #fff;height:620px;width:1200px;
            margin-top: 20px; margin-bottom: 20px;">
<div class="number">404 <br>Error</div>
<div class="text"><span>Ooops !&nbsp;Inavlid Credentials...</span></div>
   <button onclick="goBack()">&lang; &nbsp;Go Back</button>
<br>
    </div>
<a class="me" href="https://codepen.io/uzcho_/pens/popular/?grid_type=list" target="_blank"></a>
<!-- partial -->
  
</body>
</html>
<script>
function goBack() {
  window.history.back();
}
</script>