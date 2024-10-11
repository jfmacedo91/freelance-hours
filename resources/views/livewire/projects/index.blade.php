<div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
  @foreach ($this->projects as $project)
    <a href="{{ route('projects.show', $project) }}">
      <x-projects.card-simple :$project />
    </a>
  @endforeach
</div>
