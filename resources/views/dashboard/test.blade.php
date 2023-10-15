@extends('layouts.dashboard', [
    'body_id' => 'dashboard-test',
    'body_class' => 'dashboard',
])

@section('meta-dynamic')
  <title>Dashboard</title>
  <meta name="description" content="Dashboard">
@endsection

@push('page-head-scripts')
@endpush

@section('main')
  <div id="main">

    <div class="content">

      <div class="container-small">
        <form>

        </form>
      </div><!-- /.container-small -->

    </div><!-- /.content -->

  </div><!--/#main-->
@endsection

@push('scripts')
  <script>
    $(function() {
      var currentDate = moment().format('YYYY-MM-DD');
      console.log('test page current date: ', currentDate);
    }); // end of  $(function() {
  </script>
@endpush
