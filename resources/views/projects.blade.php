<div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column">
    <div style="display: flex; flex-direction: column; align-items: flex-start">
        <h1 style="margin-bottom: 0">Projects</h1>
        <ul style="padding-left: 15px">
            @foreach($projects as $project)
                <li><strong>Title:</strong> {{ $project->title }} | <strong>Url:</strong> {{ $project->url }}</li>
            @endforeach 
        </ul>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{ url('/store-project') }}">
        @csrf
        <div style="display: flex; flex-direction: column; align-items: flex-start">
            <h2>Create Project</h2>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
            <label for="url">Url</label>
            <input type="text" id="url" name="url">
            <!-- <label for="custom_domain">Custom domain</label>
            <input type="text" id="custom_domain" name="custom_domain"> -->
            <button type="submit" style="margin-top: 10px">Save</button>
        </div>
    </form>
</div>