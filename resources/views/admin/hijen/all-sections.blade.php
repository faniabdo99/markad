@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "جميع الأقسام" @endphp
        @include('admin.adminHeader')
        <div class="container-fluid">
        <section class="admin-statics">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="admin-card">
                      <a class="btn btn-success" style="color:#fff;" href="{{route('admin.hijenSection.new')}}"><i class="fas fa-plus"></i>  اضافة قسم جديد</a>
                        <h4>جميع الأقسام ({{$AllSections->count()}})</h4>
                        @if(session()->has('success'))
                        <br>
                            <div class="success-list">
                                {{ session()->get('success') }}
                            </div>
                        <br>
                        @endif
                        <table class="table table-hover">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الرابط</th>
                                    <th scope="col">اجرائات</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($AllSections as $Section)
                                  <tr>
                                    <th scope="row">{{$Section->id}}</th>
                                    <td>{{$Section->title}}</td>
                                    <td>{{$Section->slug}}</td>
                                    <td>
                                      <a class="btn btn-sm btn-danger text-white" href="{{route('admin.DeletePost' , $Section->id)}}">حذف</a>
                                    </td>
                                  </tr>
                                  @empty 
                                  <p>No Sections Yet</p>
                                  @endforelse
                                </tbody>
                            </table>
                    </div>
                </div>
              </div>
        </section>
        </div>
    </main>
    @include('layout.scripts')
    <script src="{{asset('public/js/plugins')}}/jquery.sortelements.js"></script>
    <script src="{{asset('public/js/plugins')}}/jquery.bdt.min.js"></script>
    <script>
      $(document).ready(function(){
        $('table').bdt();
      });
    </script>
</body>
</html>