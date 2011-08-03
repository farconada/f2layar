<?php
/**
 * @author Fernando Arconada fernando.arconada@gmail.com
 * Date: 2/08/11
 * Time: 14:06
 */
 
class Tx_F2layar_Domain_Repository_PoiRepository extends Tx_Extbase_Persistence_Repository {

    /**
     * Devuelve los POIs que esten en el en un radio alrededor de las coordenadas especificadas
     *
     * @param $longitude
     * @param $latitude
     * @param $range
     * @return array|Tx_Extbase_Persistence_QueryResultInterface
     */
    public function findPoisInPosition($longitude, $latitude, $range) {
        $alphaRange = rad2deg($range / 6378137);
        $query = $this->createQuery();
        $query->matching(
          $query->logicalAnd(
              $query->logicalAnd(
                  $query->greaterThanOrEqual('longitude',(floatval($longitude) - $alphaRange)),
                  $query->lessThanOrEqual('longitude',(floatval($longitude) + $alphaRange))
              ),
              $query->logicalAnd(
                  $query->greaterThanOrEqual('latitude',(floatval($latitude) - $alphaRange)),
                  $query->lessThanOrEqual('latitude',(floatval($latitude) + $alphaRange))
              )
          )
        );

        return $query->execute();
    }
}