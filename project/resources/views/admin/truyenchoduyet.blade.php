@extends('layout/admin') 
@section('body')
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách **Chương Truyện** Chờ Duyệt Gần Đây
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tiêu Đề Chương</th>
              <th>**Truyện Liên Quan**</th>
              <th>**Người Đăng**</th>
              <th>Ngày Đăng</th>
              <th>Trạng Thái</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Chương 15: Đại Chiến Thiên Giới</td>
              <td>**Truy Tiên Kỳ**</td>
              <td>Trần Văn A</td>
              <td>2024/01/15</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
            <tr>
              <td>Chương 301: Hôn Lễ Định Mệnh</td>
              <td>**Nắng Xuân Còn Lại**</td>
              <td>Lê Thị B</td>
              <td>2024/01/14</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
            <tr>
              <td>Chương 1: Bắt Đầu Từ Con Số 0</td>
              <td>**Vô Thượng Tiên Y**</td>
              <td>Phạm Văn C</td>
              <td>2024/01/14</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>

@endsection