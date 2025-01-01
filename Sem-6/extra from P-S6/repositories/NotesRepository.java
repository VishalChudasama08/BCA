package in.v8.main.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import in.v8.main.entities.Notes;
import jakarta.transaction.Transactional;

@Repository
public interface NotesRepository extends JpaRepository<Notes, Long> {
    List<Notes> findByUserId(Long userId); // Fetch notes for a specific user
    @Modifying
    @Transactional
    @Query("UPDATE Notes n SET n.bg_color = :color WHERE n.id = :id") // make custom query
    int updateNoteBgColor(@Param("id") Long id, @Param("color") String color);
    
    @Modifying
    @Transactional
    @Query("UPDATE Notes n SET n.pinned = :pinned WHERE n.id = :id")
    int updatePinnedStatus(@Param("id") Long id, @Param("pinned") boolean pinned);
}
