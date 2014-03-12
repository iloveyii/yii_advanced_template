<!-- wrapper 
============= -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SEO Settings</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-credit-card"></i>
                    Edit SEO
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="form-inline" style="margin-bottom: 15px;">
                                    <label style="display: block;">Controllers Available</label>
                                    <select class="form-control">
                                        <option>company 1</option>
                                        <option>company 2</option>
                                        <option>company 3</option>
                                        <option>company 4</option>
                                    </select>
                                    <button class="btn btn-success"> Add </button>
                                </div>

                                <div class="form-group">
                                    <label>Controllers</label>
                                    <div class="table-responsive table-products">
                                        <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Default SEO ID</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Site</td>
                                                <td><input placeholder="SEO ID" class="form-control sm-txt"></td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>User</td>
                                                <td><input placeholder="SEO ID" class="form-control sm-txt"></td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>SEO</td>
                                                <td><input placeholder="SEO ID" class="form-control sm-txt"></td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                                <div class="form-inline" style="margin-bottom: 15px;">
                                    <label for="actions" style="display: block;">Actions Available</label>
                                    <select name="actions" class="form-control">
                                        <option>Action 1</option>
                                        <option>Action 2</option>
                                        <option>Action 3</option>
                                        <option>Action 4</option>
                                    </select>
                                    <button class="btn btn-success"> Add </button>
                                </div>
                                <div class="form-group">
                                    <label for="actions">Actions</label>
                                    <div class="table-responsive table-products">
                                        <table id="actions" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Contoller ID</th>
                                                <th>SEO ID</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Login</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>User</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>SEO</td>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>
                                                    <ul class="actions">
                                                        <li><i class="table-edit"></i></li>
                                                        <li class="last"><i class="table-delete"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                        </div>

                        <!-- /.col-lg-6 (nested) -->

                        <div class="col-lg-6">
                            <h3>Enter seo details</h3>
                            <hr />
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                    <label for="metaTitle">Title</label>
                                    <input name="metaTitle" placeholder="Enter Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="metaTitleSv" placeholder="Enter Title Swedish" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="metaDescription">Meta Description</label>
                                    <textarea name="metaDescription" placeholder="Enter Meta Description" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="metaDescriptionSv" placeholder="Enter Meta Description Swedish" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="metaKeywords">Meta Keywords</label>
                                    <input name="metaKeywords" placeholder="Enter Meta Keywords" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="metaKeywordsSv" placeholder="Enter Meta Keywords Swedish" class="form-control">
                                </div>
                                <button class="btn btn-default" type="reset">Reset Button</button>
                                <button class="btn btn-outline btn-success" type="button">Save</button>
                                </fieldset>
                                <br /><br />
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

<!-- / Wrapper -->