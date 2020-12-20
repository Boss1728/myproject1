<!-- this file location is /resources/views/myprofile/create.blade.php  -->

<h1>Create My Profile</h1>
<form action="#" method="POST">
    <div>
        <strong>Name : </strong>
        <input type="text" value="{{request('name')}}"/>
    </div>
    <div>
        <strong>Lastname : </strong>
        <input type="text" value="{{request('lastname')}}"/>
    </div>
    <div>
        <strong>Email : </strong>
        <input type="text" />
    </div>
    <div><button type="submit">Add</button></div>
</form>
<!-- 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a","*",$fullname);
        echo $sensor_name;

        return view("myprofile/create");
    }
}
-->