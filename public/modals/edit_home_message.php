<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit your Homepage Message</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST"action="<?= site_url("Dashboard/home_message");?>"class="form-horizontal">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Home Message</label>
                        <div class="col-lg-10">
                            <textarea cols="10" rows="5" name="Message" placeholder="Set a your homepage message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" name="add_home_message"class="btn btn-upload" value="Set Home Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->