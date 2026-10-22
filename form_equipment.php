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
                <h2>แบบคำร้องขออุปกรณ์</h2>
            </div>
        </div>
    </fieldset>

    <fieldset class="mt-1 mp-1">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-lg-6 col-xxl-6">
                <div class="form-floating">
                <select class="form-select" id="" name="">
                    <option>เลือก</option>
                    <?php
                        $sql="SELECT * FROM `equipments` WHERE `status`='1'";
                        $rs=$db_conn->query($sql);
                            if($rs->num_rows>0){
                                while($row=$rs->fetch_assoc()){
                                    $equipments_id=(int)($row["id"] ?? 0);
                                    $equipments_name=$row["name"] ?? ""; ?>

                        <option value="<?php echo $equipments_id;?>"><?php echo $equipments_name;?></option>

                    <?php       }
                            }else{} ?>
               
                 
                    
                </select>
                <label for="sel1" class="form-label">เลือกรายการอุปกรณ์ที่ขอเบิก</label>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-lg-6 col-xxl-6">

                <div class="form-floating">
                <input type="number" name="" id="" class="form-control"  placeholder="จำนวนที่ขอเบิก">
                    <label for="comment">จำนวนที่ขอเบิล</label>
                </div>
      
            </div>
        </div>
    </fieldset>

    <fieldset class="mt-1 mp-1">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-lg-6 col-xxl-6">
                <label for="email">เหตุผลของการขอเบิก</label>
                <div class="form-floating">
                <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
                    <label for="comment">เหตุผลของการขอเบิก</label>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-lg-6 col-xxl-6">
                <label for="email"></label>
                <div class="form-floating">
                <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
                    <label for="comment">เหตุผลของการขอเบิก</label>
                </div>
            </div>
        </div>
    </fieldset>



</body>
</html>