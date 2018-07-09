<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Đơn đặt hàng mới nhất</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Ngày đặt mua</th>
                        <th>Tên</th>
                        <th>Đt Liên hệ</th>
                        <th>Địa chỉ</th>
                        <th>Yêu cầu thêm</th>
                        <th>Sim cần mua</th>
                        <th>Giá sim</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Ngày đặt mua</th>
                        <th>Tên</th>
                        <th>Đt Liên hệ</th>
                        <th>Địa chỉ</th>
                        <th>Yêu cầu thêm</th>
                        <th>Sim cần mua</th>
                        <th>Giá sim</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if($listOrderNew <> null):?>
                    <?php foreach($listOrderNew as $order):?>
                    <tr>
                        <td><?php echo $order->id?></td>
                        <td><?php echo $order->orderdate?></td>
                        <td><?php echo $order->fullname?></td>
                        <td><?php echo $order->phonecontact?></td>
                        <td><?php echo $order->address?></td>
                        <td><?php echo $order->requirements?></td>
                        <td><b><?php echo $order->phonenumber?></b></td>
                        <td><?php echo $order->phonecose?></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?> 
                   
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>