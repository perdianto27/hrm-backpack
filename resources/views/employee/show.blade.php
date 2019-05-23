@extends('backpack::layout')

@section('content')
<div class="row">
	<div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
			<img src="{{URL::asset('img/user_male.png')}}" alt="profile Pic" height="140" width="140">
			</div>

		</div>
	</div>
    <div class="col-xs-12 col-md-10">
    	<div class="row-fluid">
			<div class="col-md-12"><h2 id="name"></h2></div>
		</div>
		<div class="row-fluid">
			<div class="col-md-12">
			<p>
				<i class="fa fa-phone"></i> <span id="mobile_phone">{{ $employee->mobile_phone }}</span>&nbsp;&nbsp;
				<i class="fa fa-envelope"></i> <span id="work_email">{{ $employee->work_email }}</span>
			</p>
			</div>
		</div>
	    <div class="row-fluid">
	    	<div class="col-xs-12" style="font-size:18px;border-bottom: 1px solid #DDD;margin-bottom: 10px;padding-bottom: 10px;">
				<a href="{{ route('backpack.account.info') }}"> <button id="employeeProfileEditInfo" class="btn btn-small btn-success" onclick="modJs.editEmployee();" style="margin-right:10px;"><i class="fa fa-edit"></i> <t>Edit Info</t></button></a>
				<button id="employeeUploadProfileImage" onclick="showUploadDialog('profile_image__id_','Upload Profile Image','profile_image',_id_,'profile_image__id_','src','url','image');return false;" class="btn btn-small btn-primary" type="button" style="margin-right:10px;"><i class="fa fa-upload"></i> <t>Upload Profile Image</t></button>
				<button id="employeeDeleteProfileImage" onclick="modJs.deleteProfileImage(_id_);return false;" class="btn btn-small btn-warning" type="button" style="margin-right:10px;"><i class="fa fa-times"></i> <t>Delete Profile Image</t></button>
				<a href="{{ route('backpack.account.info') }}"> <button id="employeeUpdatePassword" onclick="modJs.changePassword();return false;" class="btn btn-small btn-success" type="button" style="margin-right:10px;"><i class="fa fa-lock"></i> <t>Change Password</t></button></a>
			</div>
	    </div>

	    <div class="row-fluid" style="border-top: 1px;">
			<div class="col-xs-6 col-md-4" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;font-size:13px;">Employee ID</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="employee_id" name="employee_id" value="employee_id">{{ $employee->employee_id }}</label>
			</div>
			<div class="col-xs-6 col-md-4" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Nama Depan</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="first_name">{{ $employee->first_name }}</label>
			</div>
			<div class="col-xs-6 col-md-4" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Job Title</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="job_title">{{ $employee->job_title }}</label>
			</div>
		</div>
    </div>
</div>

<div class="row" style="margin-left:10px;">
	<div class="panel panel-default" style="width:97.5%;">
		<div class="panel-heading"><h4><t>Personal Information</t></h4></div>
		<div class="panel-body">
		<div class="row-fluid">
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Driving License</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="driving_license">{{ $employee->driving_license }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Other ID</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="other_id">{{ $employee->other_id }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Birthday</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="birthday">{{ $employee->birthday}}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Gender</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" name="gender">{{ $employee->gender }}</label>
				
			</div>
		</div>
		<hr/>
	    <div class="row-fluid">

			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Nationality</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="nationality_Name">{{ $employee->nationality }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Marital Status</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="marital_status">{{ $employee->marital_status }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Joined Date</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="joined_date">{{ $employee->joined_date }}</label>
			</div>
		</div>
		</div>
    </div>
</div>

<div class="row" style="margin-left:10px;margin-top:20px;">
	<div class="panel panel-default" style="width:97.5%;">
		<div class="panel-heading"><h4><t>Contact Information</t></h4></div>
		<div class="panel-body">
		<div class="row-fluid">
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Address 1</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="address1">{{ $employee->address1 }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Address 2</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="address2">{{ $employee->address2 }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">City</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="city">{{ $employee->city }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Country</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="country">{{ $employee->country }}</label>
			</div>
		</div>
		<hr/>
	    <div class="row-fluid">
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Postal Code</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="postal_code">{{ $employee->postal_code }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Homephone</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="home_phone">{{ $employee->home_phone }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Workphone</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="work_phone">{{ $employee->work_phone }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Private Email</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="private_email">{{ $employee->private_email }}</label>
			</div>
		</div>
		</div>
    </div>
</div>

<div class="row" style="margin-left:10px;margin-top:20px;">
	<div class="panel panel-default" style="width:97.5%;">
		<div class="panel-heading"><h4><t>Job Details</t></h4></div>
		<div class="panel-body">
		<div class="row-fluid">
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Job Title</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="job_title">{{ $employee->job_title }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Employment Status</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="employment_status">{{ $employee->employment_status }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;"><t>Supervisor</t></label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="supervisor">{{ $employee->supervisor }}</label>
			</div>
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;"><t>Direct Reports</t></label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="direct_reports">{{ $employee->supervisor }}</label>
			</div>
		</div>
		<hr/>
		<div class="row-fluid">
			<div class="col-xs-6 col-md-3" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Department</label>
				<label class="control-label col-xs-12 " style="font-size:13px;color:#3c8dbc;" id="department">{{ $employee->department }}</label>
			</div>
		</div>
		</div>
    </div>
</div>

@endsection