def render(filename, locals = {})
  contents = File.read("assets/src/haml/partials/#{filename}.haml")
  Haml::Engine.new(contents).render(Object.new, locals)
end
