<div class="row">
        <div class="col-md-12">
            <div class="content-table">
                <div class="title-table">
                    <span>Category</span>
                    <div class="button">
                      <a href="index.php?controller=category&action=create"><button class="btn  btn-sm btn-add">Add</button></a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Create_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php echo "<pre>"; print_r($categories) ?> -->
                        <?php foreach ($categories as $category) { ?>
                            <tr>
                                <td><?php echo $category['id'] ?></td>
                                <td><?php echo $category['name'] ?></td>
                                <td><?php echo $category['status'] ?></td>
                                <td><?php echo $category['created_at'] ?></td>
                                <td>
                                    <a href="index.php?controller=category&action=edit&id=<?php echo $category['id'] ?>"><i class="fas fa-edit"></i></a>
                                    <a href="index.php"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php  } ?>
                        
                       
                    </tbody>
                  
                </table>
                <div style="margin-top: 20px;" class="paninate">
                   
                </div>

            </div>
            
        </div>
    </div>