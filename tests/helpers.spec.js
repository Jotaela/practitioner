const helpers = require ("../helpers")

test('Suma function returns 3 when pass 2 and 1', () => {
    // Prepare

    // Executar
    const resultat = helpers.suma(2,1)
    
    // Comprovar/assert/expect
    expect(resultat).toBe(3)
})

// TDD -> Test Driver Development

test('Multiplicar function return 50 when we pass 5 and 10', () => {
    
    const resultat2 = helpers.multiplication(5,10);

    expect(resultat2).toBe(50)

})