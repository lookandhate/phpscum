function check_matrix() {
    const matrix = document.getElementById('matrix');
    const a = matrix.value.split('\n').map(value => value.trim()).map(value => value.split(" ").map(value1 => Number.parseInt(value1.split(' '))));

    if (!validate_matrix(a)) {
        alert("incorrect input");
        return;
    }
    const textField = document.getElementById("result")
    textField.innerText = `Рефлексивно?: ${reflection(a)}
    Симметрично ?: ${symmetrical(a)}
    Антисимметрично?: ${antisymmetric(a)}
    Транзитивно?: ${transitivity(a)}`
}

function validate_matrix(matrix_to_validate) {
    return matrix_to_validate.every(value => value.length === matrix_to_validate.length);
}


function reflection(a) {
    const n = a.length;
    for (let i = 0; i < n; i++) {
        if (a[i][i] === 0) {
            return false;
        }
    }
    return true;

}

function symmetrical(a) {
    const n = a.length;
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            if (a[i][j] !== a[j][i]) {
                return false;
            }
        }
    }
    return true;
}


function antisymmetric(a) {
    const n = a.length;
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            if (i !== j) {
                if (a[i][j] === a[j][i]) {
                    return false;
                }
            }
        }
    }
    return true;
}

function transitivity(a) {
    const n = a.length;
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            for (let g = 0; g < n; g++) {
                if (a[i][j] === a[j][g]) {
                    if (a[i][g] !== a[i][j])
                        return false
                }
            }
        }
    }
    return true;
}