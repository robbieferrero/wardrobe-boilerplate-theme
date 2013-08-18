@extends(theme_path('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
  <section class="content">
    <h2 class="title">{{ $post->title }}</h2>

    {{ $post->parsed_content }}

    @include(theme_path('inc.tags'))
  </section>
  <hr />
  <section class="comments">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'robbieferrero'; 

        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
  </section>
@stop

