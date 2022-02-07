// todo: add type annotations

function is_alpha(character) {
    return /^[A-Z]$/i.test(character)
}

function output_array(array) {
    const output_field = document.getElementById("output")
    output_field.textContent = Array.from(array).join(', ')
}


function validate_word(word) {
    // cijb - с - цифра, b-буква, i -четная цифра.j-нечетная
    return (word.length === 4) && !isNaN(Number(word[0])) && (Number(word[1]) % 2 === 0) && (Number(word[2]) % 2 === 1) && is_alpha(word[3])
}

function validate_set(set_to_validate) {
    return Array.from(set_to_validate).every(validate_word)
}

function set_difference(first_set, second_set) {
    return Array.from(first_set).filter(value => !second_set.has(value))
}

function merge_sets() {

    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }


    let merged = new Set([...first_set, ...second_set])
    output_array(merged)

}

function intersect_sets() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }

    const intersection = Array.from(first_set).filter(value => Array.from(second_set).includes(value))
    output_array(intersection)
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
    output_array(symmetric_difference_set)
}

function difference_a_on_b() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }

    let difference = set_difference(first_set, second_set)
    output_array(difference)

}
function difference_b_on_a() {
    let first_set = new Set(document.getElementById("first_array").value.split(" "))
    let second_set = new Set(document.getElementById("second_array").value.split(" "))

    if (!validate_set(first_set) || !validate_set(second_set)) {
        alert("Incorrect input")
        return
    }

    let difference = set_difference(second_set, first_set)
    output_array(difference)



}