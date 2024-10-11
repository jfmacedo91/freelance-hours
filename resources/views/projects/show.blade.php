<x-layouts.app>
  <div class="grid grid-cols-3 gap-6">
    <livewire:projects.show :$project />
    @livewire('projects.proposals', ['project' => $project], key($project->id))
  </div>
</x-layouts.app>
