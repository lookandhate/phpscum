// todo: add type annotations

function merge_sets() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    let merged = new Set([...first_set, ...second_set])
    let output_field: Element = document.getElementById("output")
    output_field.textContent = Array.from(merged).join(', ')

}

function intersect_sets() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    const intersection = Array.from(first_set).filter(value => Array.from(second_set).includes(value))
    let output_field = document.getElementById("output")
    output_field.textContent = intersection.join(', ')
}

function symmetric_difference() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    let symmetric_difference_set = new Set()

    Array.from(first_set).forEach(function (value) {
            if (!second_set.has(value))
                symmetric_difference_set.add(value)
        }
    )
    Array.from(second_set).forEach(function (value) {
            if (!first_set.has(value))
                symmetric_difference_set.add(value)
        }
    )
    let output_field = document.getElementById("output")
    output_field.textContent = Array.from(symmetric_difference_set).join(', ')
}

function difference() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    let difference = Array.from(first_set).filter(value => !second_set.has(value))
    let output_field = document.getElementById("output")
    output_field.textContent = Array.from(difference).join(', ')

}