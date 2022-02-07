// todo: add type annotations

function validate_word(word) {
    // cijb - с - цифра, b-буква, i -четная цифра.j-нечетная
    return (word.length === 4) && !isNaN(Number(word[0])) && (Number(word[1]) % 2 === 0) && (Number(word[2]) % 2 === 1) && isNaN(Number(word[3]))
}

function validate_set(set_to_validate) {
    return Array.from(set_to_validate).every(validate_word)
}

function merge_sets() {

    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }


    let merged = new Set([...first_set, ...second_set])
    let output_field = document.getElementById("output")
    output_field.textContent = Array.from(merged).join(', ')

}

function intersect_sets() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }

    const intersection = Array.from(first_set).filter(value => Array.from(second_set).includes(value))
    let output_field = document.getElementById("output")
    output_field.textContent = intersection.join(', ')
}

function symmetric_difference() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }


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

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }

    let difference = Array.from(first_set).filter(value => !second_set.has(value))
    let output_field = document.getElementById("output")


    output_field.textContent = Array.from(difference).join(', ')

}