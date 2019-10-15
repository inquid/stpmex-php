<?php

namespace Kinedu\STP\Utils;

class Chain
{
    public static function generate(array $data): string
    {
        $order = [
            'institucionContraparte',
            'empresa',
            'fechaOperacion',
            'folioOrigen',
            'claveRastreo',
            'institucionOperante',
            'monto',
            'tipoPago',
            'tipoCuentaOrdenante',
            'nombreOrdenante',
            'cuentaOrdenante',
            'rfcOrdenante',
            'tipoCuentaBeneficiario',
            'nombreBeneficiario',
            'cuentaBeneficiario',
            'rfcBeneficiario',
            'emailBeneficiario',
            'cuentaBeneficiario2',
            'nombreBeneficiario2',
            'cuantaBeneficiario2',
            'rfcBeneficiario2',
            'conceptoPago',
            'conceptoPago2',
            'claveCatalogoUsuario1',
            'claveCatalogoUsuario2',
            'clavePago',
            'referenciaCobranza',
            'referenciaNumerica',
            'tipoOperacion',
            'tipologia',
            'usuario',
            'medioEntrega',
            'prioridad',
            'iva',
        ];

        $originalString = '||';

        foreach ($data as $key => $value) {
            $value = ltrim($value);
            $value = rtrim($value);

            $originalString .= "{$value}|";
        }

        $originalString .= '|';

        return $originalString;
    }
}
