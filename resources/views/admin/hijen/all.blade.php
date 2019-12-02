@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "جميع المقالات" @endphp
        @include('admin.adminHeader')
        <div class="container-fluid">
        <section class="admin-statics">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="admin-card">
                        <h4>جميع الموارد ({{$AllPosts->count()}})</h4>
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
                                    <th scope="col">تاريخ النشر</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($AllPosts as $post)
                                  <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{substr($post->created_at ,0 , -9)}}</td>
                                  </tr>
                                  @endforeach
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