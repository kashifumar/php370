<?php
empty re
$reg = "//";

$reg = "/xyz/";
xyz
xyz 123
123 xyz
123 xyz 123
dagshdgsahxyzdjsgdhs

//carrot
//^
$reg = "/^xyz/";
xyz
xyz 123
xyzsghasha

$reg = "/xyz$/";
xyz
123 xyz
ddgahsghsxyz

$reg = "/^xyz$/";
xyz

$reg = "/^xyz.$/";
xyza
xyz2
xyzu
xyzl
xyz+

$reg = "/^xyza?$/";
xyz
xyza

$reg = "/^xy(za)?$/";
xy
xyza

$reg = "/^xyza*$/";
xyz
xyza
xyzaa
xyzaaa
xyzaaaaaa
xyzaaaaaaaaaaaaaaaaaaa

$reg = "/^xyza+$/";
xyza
xyzaa
xyzaaa
xyzaaaaaa
xyzaaaaaaaaaaaaaaaaaaa

$reg = "/^xyza{2}$/";
xyzaa

$reg = "/^xyza{2,4}$/";
xyzaa
xyzaaa
xyzaaaa

$reg = "/^xyza[24]$/";
xyza2
xyza4
$reg = "/^xyza[0-4]$/";
xyza0
xyza1
xyza2
xyza3
xyza4

$reg = "/^xyza[0-9a-zA-Z\-\\]$/";

$reg = "/^xyza[0-4][0-4]$/";
$reg = "/^xyza[0-4]{2}$/";

$reg_name = "/^[A-Z][a-z]*$/";
$reg_name = "/^[a-zA-Z][a-zA-Z]*$/";
$reg_name = "/^[a-zA-Z]+$/";
$reg_name = "/^[a-z]+$/i";

starts with alphabet
only alphabets and digits
min 6 max 20
$reg_user_name = "/^[a-z][a-z0-9]{5,19}$/i";

1-111-1111111
11-111-1111111
111-111-1111111
1111-111-1111111
$reg_cn = "/^[0-9]{1,4}\-[0-9][0-9][0-9]\-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/";
$reg_cn = "/^[0-9]{1,4}\-[0-9]{3}\-[0-9]{7}$/";
$reg_cn = "/^\d{1,4}\-\d{3}\-\d{7}$/";






























?>