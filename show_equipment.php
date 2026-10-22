<?php
    include("conn_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบ ระบบเบิกจ่ายอุปกรณ์</title>
</head>
<body>
   

    <fieldset class="mt-3 mp-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-lg-12 col-xxl-12">
                <h2>รายการอุปกรณ์</h2>
            </div>
        </div>
    </fieldset>

    <fieldset class="mt-3 mp-3">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-lg-12 col-xxl-12">
      
            <div class="table-responsive-sm">
                <table class="table table-bordered table-sm">
                    <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสอุปกรณ์</th>
                        <th>ชื่ออุปกรณ์</th>
                        <th>จำนวนอุปกรณ์ทั้งหมด</th>
                        <th>จำนวนอุปกรณ์คงเหลือ</th>
                        <th>สถานะ</th>
                    </tr>
                    </thead>
                    <tbody>

        <?php
            $count=(int)(0);
            $sql="SELECT * FROM `equipments`";
            $rs=$db_conn->query($sql);
            if($rs->num_rows>0) {
                while($row=$rs->fetch_assoc()){
                    $count=$count+1;
                    $equipments_id=(int)($row["id"] ?? 0);
                    $equipments_item_code=$row["item_code"] ?? "";
                    $equipments_name=$row["name"] ?? "";
                    $equiements_total_qty=(int)($row["total_qty"] ?? 0);
                    $equiements_available_qty=(int)($row["available_qty"] ?? 0);
                    $equiements_status=(int)($row["status"] ?? 0);
                    
                        if(($equiements_status==1)){
                            $equiements_status_text="พร้อมใช้";
                        }else{
                            $equiements_status_text="ไม่พร้อมใช้";
                        }
                    
                    
                    ?>


                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $equipments_item_code;?></td>
                        <td><?php echo $equipments_name;?></td>
                        <td><?php echo $equiements_total_qty;?></td>
                        <td><?php echo $equiements_available_qty;?></td>
                        <td><?php echo $equiements_status_text;?></td>
                    </tr>


        <?php
                }
            }else{

            }
        ?>


                    </tbody>
                </table>
            </div>

        </div>
      </div>
    </fieldset>    




</body>
</html>