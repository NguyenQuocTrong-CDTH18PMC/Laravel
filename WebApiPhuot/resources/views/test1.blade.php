<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body ng-app="app" ng-controller="AppController">
  <div class="container">
    
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm nhóm phượt</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thêm nhóm</h4>
          </div>
          <div class="modal-body">
            <form action="">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" ng-model="nhom.name">
                </div>
                <div class="form-group">
                  <label for="msg">Message:</label>
                  <input type="text" class="form-control" id="msg" ng-model="nhom.msg">
                </div>
                <div class="form-group">
                  <label for="img">Image:</label>
                  <input type="file" class="form-control" id="img" ng-model="nhom.img">
                </div>
                <div class="form-group">
                  <label for="ngaydi">Ngay di:</label>
                  <input type="datetime-local" class="form-control" id="ngaydi" ng-model="nhom.ngaydi">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" ng-model="nhom.status" value="1" checked> Hiển thị</label>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="add_nhom()">Lưu</button>
              </form>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
    <div class="container">
        <h2>Basic Tableaaaaaa</h2>
                    
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>message</th>
              <th>image</th>
              <th>Ngay di</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="item in nhomphuots">
              <td><% item.id %></td>
              <td><% item.name %></td>
              <td><% item.message %></td>
              <td><img width="50" height="50" style="object-fit: cover" src="uploads/<% item.image %>" alt=""></td>
              <td><% item.ngaydi %></td>
              <td><% item.status %></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="{{ asset('backend/app.js') }}"></script>
    <script>
        

    </script>
</body>
</html>
