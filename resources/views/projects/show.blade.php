<x-layouts.app>
  <livewire:projects.show :$project />
  @livewire('projects.proposals', ['project' => $project], key($project->id))
</x-layouts.app>
