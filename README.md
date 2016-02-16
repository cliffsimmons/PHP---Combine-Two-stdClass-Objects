<h1>Combine Two stdClass Objects</h1>
By Cliff Simmons, http://cliffsimmons.com<br/>
<br/>
"combine_two_stdclass_objects" is a PHP function that allows one to safely merge two stdClass objects into one single stdClass object.<br/>
<br/>
<br/>
<br/>
<br/>
<h2>PARAMETERS</h2>
```
combine_two_stdclass_objects( 
  $stdClass_object_1, 
  $stdClass_object_2
);
```
**stdClass_object_1** - required parameter of variable type 'stdClass'<br/>
*This is the first parameter that you want to be used in the merging process.*<br/>
<br/>
**stdClass_object_2** - required parameter of variable type 'stdClass'<br/>
*This is the second parameter that you want to be used in the merging process.*<br/>
<br/>
<br/>
<br/>
<br/>
<h2>Example Usage</h2>
```
$stdclass_object_1 = new stdObject();
$stdclass_object_1->type = "motorcylce";
$stdclass_object_1->wheel_count = 2;

$stdclass_object_2 = new stdObject();
$stdclass_object_2->brand = "Yamaha";
$stdclass_object_2->color = "red";

$merged_stdclass_object = combine_two_stdclass_objects( $stdclass_object_1, $stdclass_object_2 );
```
