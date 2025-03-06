            <div class="page-title">
              <div class="title_left">
                <h3>List Admin</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Username </th>
                            <th class="column-title">Nama  </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                    <?php foreach ($data['admin'] as $admin) { ?>
                        <tbody>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?= $admin['aUsername']; ?></td>
                            <td class=" "><?= $admin['aFirstName']; ?>&nbsp;<?= $admin['aLastName']; ?></td>
                            <td class=" last">
                            <button class="btn btn-success col-md-2"><a href="<?= BASE_URL; ?>/Superadmin/detail/<?= $admin['aId']; ?>" style="color: white">View</a></button>
                            <button class="btn btn-warning col-md-2"><a href="<?= BASE_URL; ?>/Superadmin/edit/<?= $admin['aId']; ?>" style="color: white">Edit</a></button>
                            <button class="btn btn-danger col-md-2"><a href="<?= BASE_URL; ?>/Superadmin/delete/<?= $admin['aId']; ?>" style="color: white">Delete</a></button>
                            </td>
                          </tr>
                        </tbody>
                    <?php } ?>
                      </table>
                    </div>

            