@extends('admin.layouts.app')

@section('title', 'Appointments')
@section('heading', 'Appointments')

@section('content')
  <div class="admin-panel">
    <div class="admin-table-wrap">
      <table class="table admin-table align-middle" id="appointmentTable" style="width:100%">
        <thead>
          <tr>
            <th>Fullname</th>
            <th>Service</th>
            <th>Phone</th>
            <th>Received on</th>
            <th></th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content admin-modal">
        <div class="modal-header">
          <h2 class="modal-title">Appointment request</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="admin-detail-table">
            <tbody>
              <tr><th>Fullname</th><td id="detailName"></td></tr>
              <tr><th>Email</th><td id="detailEmail"></td></tr>
              <tr><th>Phone</th><td id="detailPhone"></td></tr>
              <tr><th>Service</th><td id="detailService"></td></tr>
              <tr><th>Message</th><td id="detailMessage"></td></tr>
              <tr><th>Received on</th><td id="detailDate"></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>
  $(function () {
    $('#appointmentTable').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('admin.appointments.data') }}',
      order: [[3, 'desc']],
      pageLength: 10,
      language: {
        search: '',
        searchPlaceholder: 'Search name, email, phone or service…',
        lengthMenu: 'Show _MENU_',
        info: 'Showing _START_–_END_ of _TOTAL_ appointments',
        paginate: { previous: 'Prev', next: 'Next' }
      },
      columns: [
        { data: 'name_html', name: 'name' },
        { data: 'service', name: 'service' },
        { data: 'phone', name: 'phone' },
        { data: 'created_at', name: 'created_at' },
        { data: 'action', name: 'action', orderable: false, searchable: false, width: '88px' },
        { data: 'email', name: 'email', visible: false, searchable: true }
      ]
    });

    var modal = new bootstrap.Modal(document.getElementById('appointmentModal'));
    $('#appointmentTable').on('click', '.admin-view-btn', function () {
      var btn = $(this);
      $('#detailName').text(btn.data('name'));
      $('#detailEmail').text(btn.data('email'));
      $('#detailPhone').text(btn.data('phone'));
      $('#detailService').text(btn.data('service'));
      $('#detailMessage').text(btn.data('message'));
      $('#detailDate').text(btn.data('date'));
      modal.show();
    });
  });
</script>
@endsection
