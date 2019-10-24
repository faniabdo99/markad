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
                        <h4>جميع المقالات ({{$AllPosts->count()}})</h4>
                        @if(session()->has('success'))
                        <br>
                            <div class="success-list">
                                {{ session()->get('success') }}
                            </div>
                        <br>
                        @endif
                        <table class="table table-hover table-responsive">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الكاتب</th>
                                    <th scope="col">تاريخ النشر</th>
                                    <th scope="col">المشاهدات</th>
                                    <th scope="col">اجرائات</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($AllPosts as $post)
                                  <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td><a target="_blank" href="{{route('blog.single',$post->p_slug)}}">{{$post->p_title}}</a></td>
                                    <td>{{$post->Author->name}}</td>
                                    <td>{{substr($post->created_at ,0 , -9)}}</td>
                                    <td>{{Counter::show('SingleBlog', $post->id)}}</td>
                                    <td>
                                      <a class="btn btn-sm btn-primary text-white" href="{{route('admin.EditPost' , $post->id)}}">تعديل</a>
                                      <a class="btn btn-sm btn-danger text-white" href="{{route('admin.DeletePost' , $post->id)}}">حذف</a>
                                    </td>
                                    
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