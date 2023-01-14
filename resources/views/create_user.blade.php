
@include('welcome')
<main role="main" class="col-md-5 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">Add New User</h5>
</div>

<div class="card">
    <form  class="form form-horizontal mar-top" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">

           <div class="col-lg-12">
           @csrf
             <div >
                    <div class="card-header">
                        <h5 class="mb-0 h6">User Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" placeholder="name"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">email<span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" placeholder="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">birthday <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input type="date"   class="phone form-control" name="birthday"  placeholder="birthday"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">password <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input type="password" class="phone form-control" name="password"  placeholder="password"  required>
                            </div>
                        </div>
                    </div>
             </div>
           </div>
           <div class="col-12">
                <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="Third group">
                        <button type="submit" class="btn btn-primary action-btn">Save</button>
                    </div>
                    
                </div>
           </div>

        </div>
    </div>

    </form>
 </div>
</div>



















